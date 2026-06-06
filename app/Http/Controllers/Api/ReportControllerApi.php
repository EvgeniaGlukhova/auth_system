<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Flower;
use App\Models\FlowerMovement; // создадим позже
use App\Models\Workshift;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ReportControllerApi extends Controller
{
    // 1. ВЫРУЧКА ЗА ДЕНЬ, НЕДЕЛЮ, МЕСЯЦ
    public function revenue(Request $request)
    {
        $period = $request->get('period', 'day'); // day, week, month
        $date = $request->get('date');
        $startDate = $this->getStartDate($period, $date);

        $revenue = Order::where('status', 'completed')
            ->where('created_at', '>=', $startDate)
            ->sum('total_amount');

        return response()->json([
            'success' => true,
            'period' => $period,
            'start_date' => $startDate,
            'revenue' => $revenue
        ]);
    }

    // 2. ТОП ТОВАРОВ ЗА МЕСЯЦ
    public function topProducts(Request $request)
    {
        $month = $request->get('month', now()->format('Y-m'));

        $topFlowers = OrderItem::where('itemable_type', Flower::class)
            ->whereHas('order', function($q) use ($month) {
                $q->where('created_at', 'like', $month . '%')
                    ->where('status', 'completed');
            })
            ->select('itemable_id', DB::raw('SUM(quantity) as total_quantity'))
            ->groupBy('itemable_id')
            ->orderBy('total_quantity', 'desc')
            ->limit(10)
            ->get()
            ->map(function($item) {
                $flower = Flower::find($item->itemable_id);
                return [
                    'id' => $item->itemable_id,
                    'name' => $flower?->name,
                    'total_quantity' => $item->total_quantity
                ];
            });

        return response()->json([
            'success' => true,
            'month' => $month,
            'top_flowers' => $topFlowers,

        ]);
    }

    // 3. ИСТОРИЯ ДВИЖЕНИЯ ЦВЕТОВ (приход/расход/потери)
    public function flowerMovements(Request $request)
    {
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        $movements = FlowerMovement::with('flower', 'user')
            ->when($startDate, fn($q) => $q->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn($q) => $q->whereDate('created_at', '<=', $endDate))
            ->orderBy('created_at', 'desc')
            ->get();

        $summary = [
            'total_incoming' => $movements->where('type', 'incoming')->sum('quantity'),
            'total_outgoing' => $movements->where('type', 'outgoing')->sum('quantity'),
            'total_loss' => $movements->where('type', 'loss')->sum('quantity'),
        ];

        return response()->json([
            'success' => true,
            'data' => $movements,
            'summary' => $summary
        ]);
    }

    // 4. КЛИЕНТЫ (новые за период)
    public function clientsStat(Request $request)
    {
        $period = $request->get('period', 'day');
        $date = $request->get('date');

        $startDate = $this->getStartDate($period, $date);

        $newClients = Client::where('created_at', '>=', $startDate)->count();
        $totalClients = Client::count();

        return response()->json([
            'success' => true,
            'period' => $period,
            'start_date' => $startDate,
            'new_clients' => $newClients,
            'total_clients' => $totalClients
        ]);
    }

    // 5. ЗАКАЗЫ ЗА ДЕНЬ, НЕДЕЛЮ, МЕСЯЦ
    public function ordersStat(Request $request)
    {
        $period = $request->get('period', 'day');
        $date = $request->get('date');

        $startDate = $this->getStartDate($period, $date);
        $stats = [
            'total_orders' => Order::where('created_at', '>=', $startDate)->count(),
            'completed_orders' => Order::where('created_at', '>=', $startDate)
                ->where('status', 'completed')->count(),
            'cancelled_orders' => Order::where('created_at', '>=', $startDate)
                ->where('status', 'cancelled')->count(),
            'pending_orders' => Order::where('created_at', '>=', $startDate)
                ->where('status', 'new')->count(),
        ];

        return response()->json([
            'success' => true,
            'period' => $period,
            'start_date' => $startDate,
            'data' => $stats
        ]);
    }

    // 6. ОТРАБОТАННЫЕ СМЕНЫ И ЧАСЫ ПО СОТРУДНИКАМ
    public function employeeShifts(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfMonth()->toDateString());
        $endDate = $request->get('end_date', now()->toDateString());

        $shifts = Workshift::with('user')
            ->whereBetween('date', [$startDate, $endDate])
            ->get()
            ->groupBy('user_id');

        $result = [];
        foreach ($shifts as $userId => $userShifts) {
            $user = $userShifts->first()->user;
            $totalHours = 0;
            $closedShifts = 0;

            foreach ($userShifts as $shift) {
                if ($shift->end_time) {
                    $start = strtotime($shift->start_time);
                    $end = strtotime($shift->end_time);
                    $totalHours += ($end - $start) / 3600;
                    $closedShifts++;
                }
            }

            $result[] = [
                'user_id' => $userId,
                'user_name' => $user->full_name,
                'total_shifts' => $userShifts->count(),
                'closed_shifts' => $closedShifts,
                'total_hours' => round($totalHours, 2)
            ];
        }

        return response()->json([
            'success' => true,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'data' => $result
        ]);
    }

    // 7. ПРОДАЖИ ПО СОТРУДНИКАМ
    public function employeeSales(Request $request)
    {
        $startDate = $request->get('start_date', now()->startOfMonth()->toDateString());
        $endDate = $request->get('end_date', now()->toDateString());

        $sales = Order::whereBetween('created_at', [$startDate, $endDate])
            ->where('status', 'completed')
            ->when($request->user_id, fn($q) => $q->where('user_id', $request->user_id))
            ->select('user_id', DB::raw('COUNT(*) as orders_count'), DB::raw('SUM(total_amount) as total_sales'))
            ->groupBy('user_id')
            ->with('user')
            ->get();

        return response()->json([
            'success' => true,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'data' => $sales
        ]);
    }

    // 8. ПОТЕРИ ЦВЕТОВ (просрочка, порча)
    public function flowerLosses(Request $request)
    {
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        $losses = FlowerMovement::where('type', 'loss')
            ->when($startDate, fn($q) => $q->whereDate('created_at', '>=', $startDate))
            ->when($endDate, fn($q) => $q->whereDate('created_at', '<=', $endDate))
            ->with('flower')
            ->get();

        $totalLoss = $losses->sum('quantity');
        $lossByFlower = $losses->groupBy('flower_id')->map(function($items, $flowerId) {
            return [
                'flower' => $items->first()->flower->name,
                'quantity' => $items->sum('quantity')
            ];
        })->values();

        return response()->json([
            'success' => true,
            'total_loss' => $totalLoss,
            'loss_by_flower' => $lossByFlower,
            'details' => $losses
        ]);
    }

    // Вспомогательный метод для расчёта даты
    private function getStartDate($period, $date = null)
    {
        $baseDate = $date ? \Carbon\Carbon::parse($date) : \Carbon\Carbon::now();

        switch ($period) {
            case 'week':
                return $baseDate->copy()->startOfWeek()->toDateString();
            case 'month':
                return $baseDate->copy()->startOfMonth()->toDateString();
            case 'year':
                return $baseDate->copy()->startOfYear()->toDateString();
            default:
                return $baseDate->copy()->startOfDay()->toDateString();
        }
    }

    // 9. ДИНАМИКА ВЫРУЧКИ (для графика)
    public function revenueChart(Request $request)
    {
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        $query = Order::where('status', 'completed');

        if ($startDate) {
            $query->whereDate('created_at', '>=', $startDate);
        }
        if ($endDate) {
            $query->whereDate('created_at', '<=', $endDate);
        }

        $revenueByDay = $query
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_amount) as total'))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'labels' => $revenueByDay->pluck('date'),
            'data' => $revenueByDay->pluck('total')
        ]);
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthControllerApi;
use App\Http\Controllers\Api\FlowerControllerApi;
use App\Http\Controllers\Api\BouquetControllerApi;
use App\Http\Controllers\Api\OrderControllerApi;
use App\Http\Controllers\Api\ClientControllerApi;
use App\Http\Controllers\Api\SupplierControllerApi;
use App\Http\Controllers\Api\BouquetItemControllerApi;
use App\Http\Controllers\Api\OrderItemControllerApi;
use App\Http\Controllers\Api\UserControllerApi;
use App\Http\Controllers\Api\WorkshiftControllerApi;
use App\Http\Controllers\Api\ScheduleControllerApi;
use App\Http\Controllers\Api\ReportControllerApi;
use App\Http\Controllers\Api\MaterialControllerApi;




Route::post('/test-order', function(Request $request) {
    return response()->json([
        'message' => 'Test route works',
        'data' => $request->all()
    ]);
});

Route::post('/login', [AuthControllerApi::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    // Маршруты для авторизации
    Route::get('/me', [AuthControllerApi::class, 'me']);
    Route::post('/logout', [AuthControllerApi::class, 'logout']);


    // GET
    Route::get('/flower', [FlowerControllerApi::class, 'index']);
    Route::get('/bouquet', [BouquetControllerApi::class, 'index']);
    Route::get('/client', [ClientControllerApi::class, 'index']);
    Route::get('/supplier', [SupplierControllerApi::class, 'index']);
    Route::get('/order', [OrderControllerApi::class, 'index']);
    Route::get('/bouquet-item', [BouquetItemControllerApi::class, 'index']);
    Route::get('/order-item', [OrderItemControllerApi::class, 'index']);
    Route::get('/user', [UserControllerApi::class, 'index']);
    Route::get('/workshift', [WorkshiftControllerApi::class, 'index']);
    Route::get('/schedule', [ScheduleControllerApi::class, 'index']);
    Route::get('/material', [MaterialControllerApi::class, 'index']);

// POST запрос (создание)
    Route::post('/flower', [FlowerControllerApi::class, 'store']);
    Route::post('/bouquet', [BouquetControllerApi::class, 'store']);
    Route::post('/client', [ClientControllerApi::class, 'store']);
    Route::post('/supplier', [SupplierControllerApi::class, 'store']);
    Route::post('/order', [OrderControllerApi::class, 'store']);
    Route::post('/bouquet-item', [BouquetItemControllerApi::class, 'store']);
    Route::post('/order-item', [OrderItemControllerApi::class, 'store']);
    Route::post('/user', [UserControllerApi::class, 'store']);
    Route::post('/workshift', [WorkshiftControllerApi::class, 'store']);
    Route::post('/schedule', [ScheduleControllerApi::class, 'store']);
    Route::post('/material', [MaterialControllerApi::class, 'store']);

    Route::post('/order/{id}/complete', [OrderControllerApi::class, 'complete']);

// PUT/PATCH запрос (изменение)
    Route::put('/flower/{id}', [FlowerControllerApi::class, 'update']);
    Route::put('/bouquet/{id}', [BouquetControllerApi::class, 'update']);
    Route::put('/client/{id}', [ClientControllerApi::class, 'update']);
    Route::put('/supplier/{id}', [SupplierControllerApi::class, 'update']);
    Route::put('/order/{id}', [OrderControllerApi::class, 'update']);
    Route::put('/bouquet-item/{id}', [BouquetItemControllerApi::class, 'update']);
    Route::put('/order-item/{id}', [OrderItemControllerApi::class, 'update']);
    Route::put('/user/{id}', [UserControllerApi::class, 'update']);
    Route::put('/workshift/{id}', [WorkshiftControllerApi::class, 'update']);
    Route::put('/schedule/{id}', [ScheduleControllerApi::class, 'update']);
    Route::put('/material/{id}', [MaterialControllerApi::class, 'update']);



// DELETE запрос (удаление)
    Route::delete('/flower/{id}', [FlowerControllerApi::class, 'destroy']);
    Route::delete('/bouquet/{id}', [BouquetControllerApi::class, 'destroy']);
    Route::delete('/client/{id}', [ClientControllerApi::class, 'destroy']);
    Route::delete('/supplier/{id}', [SupplierControllerApi::class, 'destroy']);
    Route::delete('/order/{id}', [OrderControllerApi::class, 'destroy']);
    Route::delete('/bouquet-item/{id}', [BouquetItemControllerApi::class, 'destroy']);
    Route::delete('/order-item/{id}', [OrderItemControllerApi::class, 'destroy']);
    Route::delete('/user/{id}', [UserControllerApi::class, 'destroy']);
    Route::delete('/workshift/{id}', [WorkshiftControllerApi::class, 'destroy']);
    Route::delete('/schedule/{id}', [ScheduleControllerApi::class, 'destroy']);
    Route::delete('/material/{id}', [MaterialControllerApi::class, 'destroy']);

//    Route::apiResource('movements', ReportControllerApi::class);

    Route::post('/flower/{id}/incoming', [FlowerControllerApi::class, 'incoming']);
    Route::post('/flower/{id}/outgoing', [FlowerControllerApi::class, 'outgoing']);
    Route::post('/material/{id}/incoming', [MaterialControllerApi::class, 'incoming']);
    Route::post('/material/{id}/outgoing', [MaterialControllerApi::class, 'outgoing']);
    Route::post('/bouquet/{id}/incoming', [BouquetControllerApi::class, 'incoming']);
    Route::post('/bouquet/{id}/outgoing', [BouquetControllerApi::class, 'outgoing']);

// Отчёты
    Route::prefix('reports')->group(function () {
        Route::get('/revenue', [ReportControllerApi::class, 'revenue']);
        Route::get('/revenue-chart', [ReportControllerApi::class, 'revenueChart']);
        Route::get('/top-products', [ReportControllerApi::class, 'topProducts']);
        Route::get('/movements', [ReportControllerApi::class, 'movements']);
        Route::get('/clients', [ReportControllerApi::class, 'clientsStat']);
        Route::get('/orders', [ReportControllerApi::class, 'ordersStat']);
        Route::get('/employee-shifts', [ReportControllerApi::class, 'employeeShifts']);
        Route::get('/employee-sales', [ReportControllerApi::class, 'employeeSales']);
        Route::get('/flower-losses', [ReportControllerApi::class, 'flowerLosses']);
        Route::get('/material/{id}', [MaterialControllerApi::class, 'show']);
    });
});



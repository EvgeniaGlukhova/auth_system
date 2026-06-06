<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'type',
        'client_id',
        'client_name',
        'client_phone',
        'delivery_date',
        'delivery_time',
        'assembly_date',
        'delivery_address',
        'delivery_type',
        'status',
        'total_amount',
        'payment_method',
        'comment',
        'user_id',
        'courier_id'
    ];

    protected $casts = [
        'delivery_date' => 'date',
        'assembly_date' => 'date',
        'delivered_at' => 'datetime'
    ];



    // Связь с клиентом
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Связь с товарами заказа
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Связь с курьером
    public function courier()
    {
        return $this->belongsTo(User::class, 'courier_id');
    }

    // Получить имя клиента
    public function getClientDisplayNameAttribute()
    {
        if ($this->client_id) {
            return $this->client->name . ' ' . $this->client->surname ?? $this->client_name;
        }
        return $this->client_name;
    }



    // Проверка типа
    public function isOrder()
    {
        return $this->type === 'order';
    }

    public function isSale()
    {
        return $this->type === 'sale';
    }

    // Связь с пользователем (сотрудником)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Проверка типа доставки
    public function isPickup()
    {
        return $this->delivery_type === 'pickup';
    }


}

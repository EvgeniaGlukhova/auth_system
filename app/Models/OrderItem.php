<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orders_items';

    protected $fillable = [
        'order_id',
        'itemable_id',
        'itemable_type',
        'quantity',
        'price'
    ];

    // Связь с заказом
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Полиморфная связь с цветком или букетом
    public function itemable()
    {
        return $this->morphTo();
    }

    // Проверка типа товара
    public function isFlower()
    {
        return $this->itemable_type === Flower::class;
    }

    public function isBouquet()
    {
        return $this->itemable_type === Bouquet::class;
    }

    // Получить название товара
    public function getItemNameAttribute()
    {
        return $this->itemable ? $this->itemable->name : 'Unknown';
    }
}

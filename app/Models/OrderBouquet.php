<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderBouquet extends Model
{
    protected $fillable = ['order_id', 'bouquet_id', 'quantity', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }
}

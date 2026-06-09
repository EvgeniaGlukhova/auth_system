<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bouquet extends Model
{
    protected $fillable = ['name', 'price', 'description',  'quantity', 'production_date', 'expiry_date' ];

//    public function flowers()
//    {
//        return $this->belongsToMany(Flower::class, 'bouquet_items', 'bouquet_id', 'flower_id')
//            ->withPivot('quantity'); // количество цветов в букете
//    }

// Добавить новую полиморфную связь
    public function items()
    {
        return $this->morphMany(BouquetItem::class, 'bouquet');
    }

    // Или для получения всех компонентов букета
    public function components()
    {
        return $this->hasMany(BouquetItem::class);
    }

    public function orderBouquets()
    {
        return $this->hasMany(OrderBouquet::class);
    }

    public function decreaseQuantity($amount)
    {
        if ($this->quantity >= $amount) {
            $this->quantity -= $amount;
            $this->save();
            return true;
        }
        return false;
    }

    public function movements()
    {
        return $this->morphMany(Movement::class, 'movable');
    }
}

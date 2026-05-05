<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ['name', 'price', 'quantity', 'supplier_id', 'received_date', 'expiry_date' ];

    public function bouquets()
    {
        return $this->belongsToMany(Bouquet::class, 'bouquet_items', 'flower_id', 'bouquet_id')
            ->withPivot('quantity');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function getSupplierNameAttribute()
    {
        return $this->supplier ? $this->supplier->company_name : null;
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
}

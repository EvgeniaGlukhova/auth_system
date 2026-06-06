<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',
        'quantity',
        'supplier_id',
        'expiry_date'
    ];
    protected $casts = [
        'expiry_date' => 'date',
        'price' => 'decimal:2'
    ];

    // Связь с поставщиком
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }


}

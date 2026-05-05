<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BouquetItem extends Model
{
    protected $table = 'bouquet_items';

    protected $fillable = [
        'bouquet_id',
        'flower_id',
        'quantity'
    ];

    // Связь с букетом
    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }

    // Связь с цветком
    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }

    // Получить общую стоимость цветов в букете
    public function getTotalPriceAttribute()
    {
        return $this->flower->price * $this->quantity;
    }
}

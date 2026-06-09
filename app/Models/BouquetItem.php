<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BouquetItem extends Model
{
    protected $table = 'bouquet_items';

    protected $fillable = [
        'bouquet_id',
        'itemable_id',
        'itemable_type',
        'user_id',
        'quantity'
    ];

    // Связь с букетом
    public function bouquet()
    {
        return $this->belongsTo(Bouquet::class);
    }

    // Полиморфная связь с цветком или материалом
    public function itemable()
    {
        return $this->morphTo();
    }

    // Связь с сотрудником (кто собрал)
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // Получить тип компонента (цветок или материал)
    public function getItemTypeAttribute()
    {
        if ($this->itemable_type === Flower::class) {
            return 'flower';
        }
        if ($this->itemable_type === Material::class) {
            return 'material';
        }
        return 'unknown';
    }

    // Получить цену компонента
    public function getItemPriceAttribute()
    {
        return $this->itemable ? $this->itemable->price : 0;
    }

    // Получить общую стоимость
    public function getTotalPriceAttribute()
    {
        return $this->getItemPriceAttribute() * $this->quantity;
    }
}

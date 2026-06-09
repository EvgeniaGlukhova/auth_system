<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $table = 'movements';

    protected $fillable = [
        'movable_id',
        'movable_type',
        'type',
        'quantity',
        'quantity_before',
        'quantity_after',
        'reason',
        'user_id'
    ];

    // Полиморфная связь
    public function movable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

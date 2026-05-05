<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlowerMovement extends Model
{
    protected $fillable = [
        'flower_id', 'type', 'quantity', 'quantity_before',
        'quantity_after', 'reason', 'user_id'
    ];

    public function flower()
    {
        return $this->belongsTo(Flower::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

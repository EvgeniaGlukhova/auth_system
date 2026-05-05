<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
        'weekend'
    ];

    protected $casts = [
        'date' => 'date',
        'weekend' => 'boolean'
    ];

    // Связь с пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

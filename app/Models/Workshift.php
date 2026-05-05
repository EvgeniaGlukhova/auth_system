<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshift extends Model
{
    protected $table = 'workshifts';

    protected $fillable = [
        'user_id',
        'date',
        'start_time',
        'end_time',
        'closed'
    ];

    protected $casts = [
        'date' => 'date',
        'closed' => 'boolean'
    ];

    // Связь с пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

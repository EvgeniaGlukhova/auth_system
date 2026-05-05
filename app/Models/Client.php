<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'patronymic',
        'surname',
        'email',
        'phone',
        'address',
        'birth_date',
        'comments'
    ];

    // Аксессор для полного имени
    public function getFullNameAttribute()
    {
        return "{$this->surname} {$this->name} {$this->patronymic}";
    }

    // Связь с заказами (если есть)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

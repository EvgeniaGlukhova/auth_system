<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'role_id',
        'name',        // имя
        'patronymic',  // отчество
        'surname',     // фамилия
        'email',
        'phone',
        'password',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Проверка ролей
    public function isAdministrator()
    {
        return $this->role->name === 'administrator';
    }

    public function isFlorist()
    {
        return $this->role->name === 'florist';
    }

    public function isSeller()
    {
        return $this->role->name === 'seller';
    }

    public function isSeller_Florist()
    {
        return $this->role->name === 'seller - florist';
    }

    // (аксессор для полного имени)
    public function getFullNameAttribute()
    {
        return "{$this->surname} {$this->name} {$this->patronymic}";
    }

    //  короткое имя
    public function getShortNameAttribute()
    {
        return "{$this->name} {$this->surname}";
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }



}

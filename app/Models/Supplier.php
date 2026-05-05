<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'company_name',
        'responsible_person',
        'email',
        'phone',
        'address',
        'contract_start',
        'contract_end',
        'comments'
    ];

    // Проверка активности контракта
    public function isContractActive()
    {
        if (!$this->contract_start || !$this->contract_end) {
            return false;
        }

        $today = now();
        return $today >= $this->contract_start && $today <= $this->contract_end;
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account_type_id',
        'currency_id',
    ];

    public function currency() { 
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function accountType() { 
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }
}

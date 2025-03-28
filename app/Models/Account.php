<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name',
        'type',
        'initial_balance',
        'current_balance',
        'currency',
        'description',
        'user_id',
        'is_active',
    ];
}

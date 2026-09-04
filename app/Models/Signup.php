<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'name', 'kana', 'email', 'password', 'phone',
        'postcode', 'prefecture', 'city', 'address', 'remarks',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'company',
        'name',
        'phone',
        'mail',
        'birthday',
        'sex',
        'job',
        'contact',
        'remarks',
        'status'
    ];
}
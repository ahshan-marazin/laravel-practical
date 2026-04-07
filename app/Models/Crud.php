<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'cruds';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address'
    ];
}


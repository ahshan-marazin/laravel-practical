<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'profiles';
    protected $fillable = [
        'crud_id',
        'name',
        'description',
        'email'
    ];

    public function crud()
    {
        return $this->belongsTo(Crud::class);
    }
}

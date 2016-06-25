<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = "employee";
    protected $fillable = [
        'name', 'email', 'password','Mobile','address'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    Protected $primaryKey = "ID";
    protected $fillable = [
        'Username',
        'Password',
        'Name',
        'Email',
        'EOB',
        'Access',
        'Created',
    ];
}

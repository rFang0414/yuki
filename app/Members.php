<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    Protected $primaryKey = "ID";
    protected $fillable = [
        'Lastname',
        'Firstname',
        'gender',
        'email',
        'state',
    ];
}

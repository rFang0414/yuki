<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    Protected $primaryKey = "ID";
    protected $fillable = [
        'Gender',
        'Country',
        'State',
        'City',
        'Satisfaction',
        'Created',
    ];
}

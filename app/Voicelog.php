<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voicelog extends Model
{
    protected $fillable = [
        'id',
        'client_id',
        'theme_id',
    ];

}

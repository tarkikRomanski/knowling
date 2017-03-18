<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientspromocode extends Model
{
    protected $fillable = [
        'id',
        'client_id',
        'promocode_id',
    ];
}

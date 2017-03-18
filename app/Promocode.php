<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocode extends Model
{
    protected $fillable = [
        'id',
        'type',
        'code',
        'limit',
        'note',
    ];

    public static function checkCode($id)
    {
        return Promocode::where('id', $id)->select('limit as l')->get()->toArray()[0]['l']==0?false:true;
    }
}

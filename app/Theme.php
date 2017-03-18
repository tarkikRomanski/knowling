<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $fillable = [
                'id',
                'title',
                'subtitle',
                'image',
                'active',
                'separator',
                'voices',
    ];


}

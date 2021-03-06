<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtheme extends Model
{
    protected $fillable = [
        'id',
        'theme_id',
        'title',
        'description',
        'image',
        'separator',
    ];

    public function getSubthemesFromTheme($id){
        return Subtheme::where('theme_id', $id)->get();
    }
}

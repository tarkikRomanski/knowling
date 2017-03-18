<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'id',
        'subtheme_id',
        'position',
        'title',
        'subtitle',
        'separator',
        'image',
        'background',
        'card_color',
        'text',
        'text_color',
        'end_separator',
        'button_color',
        'quote',
        'parent',
    ];
}

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
        'text',
        'parent',
        'test_id',
        'type_id',
        'full_image',
        'image_description',
        'detail',
    ];

    public static function getSubcardsFromParentsId($id) {
        return Card::where('id', $id)->get();
    }

    public static function getParentsCards() {
        return Card::where('parent', null)->get();
    }

    public static function searchCardsFromType($type) {
        return Card::where('type_id', $type)->get();
    }

    public static function changeCardPosition($id, $newPosition){

        $card = Card::where('id', $id)->get()->toArray()[0];
        $parent = $card['parent'];

        $oldPosition = $card['position'];

        Card::where('id', $id)->update([
            'position' => $newPosition
        ]);

        $bCards = Card::where('parent', $parent)->where('position', '<', $oldPosition)->get();
        $aCards = Card::where('parent', $parent)->where('position', '>', $newPosition)->get();

    }
}

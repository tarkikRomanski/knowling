<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
            'id',
            'question',
            'answears',
            'true_answears',
        ];

    public static function addTest($question, $answears, $truea) {
        if(is_array($answears)){

            $r = Test::create([
                'question' => $question,
                'answears' => json_encode($answears),
                'true_answears' => $truea
            ]);

            return $r->id;

        } else {
            return false;
        }
    }
}

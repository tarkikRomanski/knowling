<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
            'id',
            'user_id',
            'target_type',
            'target_id',
            'text',
    ];

    public static function getCommentsFromTarget($target_type, $target_id){
        return Comment::where('target_type', $target_type)->where('target_id', $target_id)->get()->toArray();
    }
}
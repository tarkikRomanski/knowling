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
}

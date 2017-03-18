<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'login',
        'email',
        'password',
    ];

    public static function addClient($login, $password, $email=null){
        $r = Client::create([
            'login'=>$login,
            'password'=>md5($password),
            'email'=>$email
        ]);

        return $r->id;
    }

    public static function changePassword($id, $old, $new){
        if(md5($old) == Client::where('id', $id)->get()->toArray()[0]['password']){
            Client::where('id', $id)->update([
                'password' => md5($new)
            ]);
        }
    }
}

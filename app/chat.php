<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $guarded = [];

    static public function add($data){
        static::create($data);
    }
}

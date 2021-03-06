<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $fillable = [
    	'user_id',
    	'post_id',
        'link',
        'type'
    ];

    public function post(){
    	return $this->belongsTo(Post::Class);
    }

    public function user(){
    	return $this->belongsTo(User::Class);
    }

}

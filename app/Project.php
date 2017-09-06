<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'user_id',
        'title',
        'location',
        'scheduled_at',
        'last_update',
        'type'
    ];


    public function user(){
    	return $this->belongsTo(User::Class);
    }

    public function posts(){
    	return $this->hasMany(Post::Class);
    }

    
}

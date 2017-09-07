<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $fillable = [
        'user_id',
        'references',
        'designations',
        'quantity',
        'status',
        'origin'
    ];

    public function user(){
    	return $this->belongsTo(User::Class);
    }

}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // On vérifie qu'on est administrateur
    public function isAdmin(){
        return $this->role === 'administrator';
    }

    // On vérifie qu'on est éditeur
    public function isEditor(){
        return $this->role ==='editor';
    }

    // Vérifier si on est propriétaire de la ressource
    public function owner($resourceId){
        return $this->id === $resourceId;
    }

    public function pictures(){
        return $this->hasMany(Picture::Class);
    }

    public function projects(){
        return $this->hasMany(Project::Class);
    }

    public function stock(){
        return $this->hasOne(Stock::Class);
    }

    public function scopeCustomers($query){
        return $query->where('role', '=', 'customer');
    }


}

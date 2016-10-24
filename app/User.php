<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User  extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $fillable = [
        'first_name','last_name','email','password'
    ];  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];


    public function posts(){
        return $this->hasMany(Post::class,'autor_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{

    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'password', 'api_token','email');

    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
protected $hidden=[
    'password','api_token'
];
}
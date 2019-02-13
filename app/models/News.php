<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model 
{

    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = array('title', 'desc', 'img', 'category_id', 'admin_id');

    public function admin()
    {
        return $this->belongsTo('Models\Admin');
    }

    public function category()
    {
        return $this->belongsTo('Models\Category');
    }

}
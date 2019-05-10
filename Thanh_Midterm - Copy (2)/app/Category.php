<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';
    protected $guarded = ['id','name'];

    public function product() {
    	return $this->belongsTo('App\Category','cate_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'Products'; // Tên của bảng trong database
    protected $guarded = ['id','code','name','image', 'price','oldPrice', 'cate_id']; // Lấy hết các trường trong bảng đó

    public function category() {
    	return $this->hasMany('App\Product','cate_id','id');
    }
}

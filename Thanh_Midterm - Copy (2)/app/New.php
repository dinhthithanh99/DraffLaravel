<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class New extends Model
{
     protected $table = 'news';
    protected $guarded = ['id',  'titles',  'summary',  'date_post' ,  'content' ,  'view' ,  'img' ,  'source' ,  'id_cate' ,  'created_at',  'updated_at'];
}

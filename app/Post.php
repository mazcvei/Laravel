<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $table='posts';
   protected $fillable= ['title','article','created_at','updated_at'];
   public function comments(){
       return $this->hasMany('App/Comment');
   }
}

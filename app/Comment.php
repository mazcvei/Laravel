<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table=comment;
    protected $fillable= ['email','comment','isResponse','comment_id','created_at','updated_at'];

    public function post(){
        return $this->belongaTo('App\Post');
    }
    public function commentsChild(){
        return $this->hasMany('App\Comment');
    }
    public function commentsParent(){
        return $this->belongsTo('App\Comment');
    }

}

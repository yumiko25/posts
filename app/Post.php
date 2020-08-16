<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = ['title','name','work','good_thing_content','bad_thing_content','advice','user_id'];
     
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}

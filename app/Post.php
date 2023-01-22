<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'user_id', 'position', 'title','body','created_at'];
    
    public function User(){
        return $this->belongsTo('App\User','user_id','id');
    }
}

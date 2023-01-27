<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'user_id', 'position', 'title','body','created_at'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

}

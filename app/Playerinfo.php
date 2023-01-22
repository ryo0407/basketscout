<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playerinfo extends Model
{
    protected $fillable = ['id', 'user_id', 'team_name', 'height','weight','main_position','strong_point',
    'profile_photo'];
    
    public function User(){
        return $this->hasOne('App\User','user_id','id');
    }
}

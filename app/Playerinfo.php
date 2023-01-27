<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playerinfo extends Model
{
    protected $table = 'playerinfos';
    protected $fillable = ['id', 'user_id', 'team_name', 'height','weight','main_position','strong_point',
    'profile_photo'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

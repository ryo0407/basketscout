<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $fillable = ['id', 'player_id', 'pic_id', 'scout_reason','scout_flg'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

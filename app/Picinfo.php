<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picinfo extends Model
{
    protected $table = 'picinfos';
    protected $fillable = ['id', 'user_id', 'team_name', 'active_place','team_address'];
    
    public function User(){
        return $this->belongsTo('App\User');
    }

    public function reasons(){
        return $this->belongsTo('App\Reasons', 'reasons.pic_id', 'picinfos.user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picinfo extends Model
{
    protected $fillable = ['id', 'user_id', 'team_name', 'active_place','team_address'];
    
    public function User(){
        return $this->hasOne('App\User','user_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function appointeduser(){
       return $this->belongsTo('App\User', 'm_user_id');
    }
    // public function appointeduser(){
    //     return $this->belongsTo('App\User', 'm_user_id', 'id');
    // }
    public function time(){
        return $this->belongsTo('App\TimeDivision', 'time_id');
    }
}

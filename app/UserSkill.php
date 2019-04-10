<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    //
    public function skill(){
        return $this->belongsTo('App\Skill', 'skill_id');
    }
}

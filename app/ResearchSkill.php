<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchSkill extends Model
{
    //
    public function skill(){
        return $this->belongsTo('App\Skill', 'skill_id');
      }
}

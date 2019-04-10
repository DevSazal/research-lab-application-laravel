<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchApplicant extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
      }
    public function research(){
      return $this->belongsTo('App\Research', 'research_id');
    }
}

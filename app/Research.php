<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'expire_at', 'user_id', 'fingerprint',
    ];
}

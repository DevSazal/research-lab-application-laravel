<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Skill;
use Auth;

class ProfileController extends Controller
{
    public function edit(){

        $array['user'] = User::find(Auth::user()->id);
        // $array['us'] = UserSkill::where('user_id', Auth::user()->id)->get();
        $array['skills'] = Skill::all();
        return view('admin.profile.edit')->with($array);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Appointment;
use App\TimeDivision;

use Auth;

class SupervisorController extends Controller
{
    //
    public function interviewForm($id,$user)
    {
        $array['rid'] = $id;
        $array['user'] = User::find($user);
        $array['appointments'] = Appointment::where('user_id', Auth::user()->id)->get();
        $array['times'] = TimeDivision::all();
        return view('admin.interview')->with($array);
    }
}

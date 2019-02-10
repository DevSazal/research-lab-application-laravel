<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class RootController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	return view('admin.index');
    }
    public function newUser(){
    	
    	$array['users'] = User::where('role', 1)->paginate(5);
    	return view('admin.users')->with($array);
    }
    public function reqUpdate($id, User $user){

    	$user->power = 1;
    	$user->save();

    	return redirect('app/user/requests');
    	
    	// $array['users'] = User::where('role', 1)->paginate(5);
    	// return view('admin.users')->with($array);
    }
}

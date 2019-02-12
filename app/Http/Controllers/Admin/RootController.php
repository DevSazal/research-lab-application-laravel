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
    	
    	$array['users'] = User::where('role', 1)->orderBy('id', 'desc')->paginate(5);
    	return view('admin.users')->with($array);
    }


    public function verifyResearchUser($id){

    	$user = User::find($id);
    	$user->power = 1;
    	$user->save();

    	return redirect('app/user');

    }

    public function unverifyResearchUser($id){

    	$user = User::find($id);
    	$user->power = 0;
    	$user->save();

    	return redirect('app/user');

    }
}

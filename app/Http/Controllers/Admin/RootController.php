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
    	
    	$array['users'] = User::paginate(1);
    	return view('admin.users')->with($array);
    }
}

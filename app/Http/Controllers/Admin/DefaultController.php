<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Research;

class DefaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $array['researches'] = Research::where('status', 1)->orderBy('id', 'desc')->paginate(5);
    	return view('admin.index')->with($array);
    }

}

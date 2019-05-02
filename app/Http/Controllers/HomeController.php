<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Training;
use App\Awareness;
use App\Research;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $array['research'] = Research::where('status','>=', 2)->orderBy('id', 'desc')->limit(6)->get();
        $array['events'] = Awareness::orderBy('id', 'desc')->limit(3)->get();
        return view('index')->with($array);
    }
    public function training(){
        $array['trainings'] = Training::orderBy('id', 'desc')->paginate(12);
        return view('training')->with($array);
    }

    public function seminar(){
        $array['events'] = Awareness::orderBy('id', 'desc')->paginate(12);
        return view('seminar')->with($array);
    }
    public function research(){
        $array['research'] = Research::where('status','>=', 2)->orderBy('id', 'desc')->paginate(9);
        return view('research')->with($array);
    }
}

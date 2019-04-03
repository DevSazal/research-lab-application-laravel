<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Research;
use App\ResearchApplicant;

use Auth;

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

    public function report(){
        return view('admin.report');
    }
    
    public function singleResearch($id)
    {
        $array['research'] = Research::find($id);
        $array['appliers'] = ResearchApplicant::where('research_id', $id)->get();
        // $array['skills'] = Skill::all();
        return view('admin.research')->with($array);
    }

    public function apply($id){

        if(Auth::user()->role == 1 && Auth::user()->power == 1){
            $apply = new ResearchApplicant();
            $apply->research_id = $id;
            $apply->user_id = Auth::user()->id;
            $apply->save();
        }
    	return redirect('app/research/'.$id);
    }

}

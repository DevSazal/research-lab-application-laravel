<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Appointment;
use App\TimeDivision;
use App\ResearchApplicant;

use Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{
    //
    public function interviewForm($id,$user)
    {
        $array['rid'] = $id;
        $array['user'] = User::find($user);
        $array['appointments'] = Appointment::where('user_id', Auth::user()->id)->get(); //use it in future
        $array['times'] = TimeDivision::all();
        return view('admin.interview')->with($array);
    }
    public function interviewSave(Request $request){

        $validator = Validator::make($request->all(), [
	        'note' => 'required|string|max:255',
	        'date' => 'required|date',
	        'time' => 'required',
            'invite_user_id'=>  'required',
            'research_id'=>  'required',
	    ]);
  

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

		    	// The blog post is valid...

                $model = new Appointment();
                $model->note = $request->note;
                $model->appointment_date = $request->date;
                $model->time_id = $request->time;
                $model->user_id = Auth::user()->id;
                $model->m_user_id = $request->invite_user_id;
                $model->research_id = $request->research_id;
                $model->save();

                $applier = ResearchApplicant::find($request->invite_user_id);
                $applier->status = 1;
                $applier->save();

			    return redirect('app/research/'.$request->research_id);
		    }


	    // dd($validator);
    }

    
}

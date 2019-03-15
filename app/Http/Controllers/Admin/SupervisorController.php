<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Appointment;
use App\TimeDivision;
use App\ResearchApplicant;
use App\Research;
use App\Message;
use App\MessageReceiver;

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

    public function award($id,$user,$raid)
    {
        $applier = ResearchApplicant::find($raid);
                $applier->status = 2;
                $applier->save();
        $research = Research::find($id);
                $research->status = 2;
                $research->save();

        $msg = new Message();
        $msg->research_id = $id;
        $msg->user_id = Auth::user()->id;
        $msg->message = "Hi, Let's start our research.";
        $msg->save();

        $appliers = ResearchApplicant::where('research_id', $id)->where('status', 2)->get();
        foreach($appliers as $a){
            $rcv = new MessageReceiver();
            $rcv->message_id = $msg->id;
            $rcv->receiver_user_id = $a->user_id;
            $rcv->save();
        }
        return redirect('app/research/'.$id);
    }

    
}

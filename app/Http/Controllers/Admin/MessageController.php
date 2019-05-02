<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Research;
use App\Message;
use App\ResearchApplicant;
use App\MessageReceiver;

use Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth::user()->role = 2){
        //     $array['list'] = Research::where('user_id', Auth::user()->id)->where('status', 2)->get();
        // }elseif(Auth::user()->role = 1){
        //     $array['list'] = ResearchApplicant::where('user_id', Auth::user()->id)->where('status', 2)->get();
        // }
        return view('admin.message.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
	        'msg' => 'string',
            'rid' => 'required',
            'spid' => 'required',
            'file'=>  'mimes:jpg,jpeg,gif,png,pdf,doc,docx,xls,xlsx,ppt,pptx',
	    ]);

	    //   

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

                // The request is valid...

                if(isset($request->file)){
                    if($request->file->getClientOriginalName()){
                            $ext = $request->file->getClientOriginalExtension();
                            $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
                            $request->file->storeAs('public/researchfile',$file);
                        }else{
                            $file = NULL;
                        }
                }else{
                    $file = NULL;    
                }

                $msg = new Message();
                $msg->research_id = $request->rid;
                $msg->user_id = Auth::user()->id;
                $msg->message = $request->msg;
                $msg->file = $file;
                $msg->save();

                if($request->spid == Auth::user()->id){
                    $appliers = ResearchApplicant::where('research_id', $request->rid)
                                ->where('status','>=', 2)
                                ->get();
                    foreach($appliers as $a){
                        $rcv = new MessageReceiver();
                        $rcv->message_id = $msg->id;
                        $rcv->receiver_user_id = $a->user_id;
                        $rcv->save();
                    }
                }else{
                    $appliers = ResearchApplicant::where('research_id', $request->rid)
                                ->where('status','>=', 2)
                                ->where('user_id', '!=', Auth::user()->id)
                                ->get();
                    foreach($appliers as $a){
                        $rcv = new MessageReceiver();
                        $rcv->message_id = $msg->id;
                        $rcv->receiver_user_id = $a->user_id;
                        $rcv->save();
                    }

                    $rcv = new MessageReceiver();
                    $rcv->message_id = $msg->id;
                    $rcv->receiver_user_id = $request->spid;
                    $rcv->save();

                }

			    return redirect('app/inbox/'.$request->rid);
		    }
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // msg seen start
                    $msg = MessageReceiver::where('receiver_user_id', Auth::user()->id)
                                ->where('seen', 0)
                                ->get();
                    foreach($msg as $m){
                        $rcv = MessageReceiver::find($m->id);
                        $rcv->seen = 1;
    
                        $rcv->save();
                    } 
        // msg seen end

        $r = Research::find($id);
        if(Auth::user()->role == 2 && $r->user_id == Auth::user()->id){
            $array['messages'] = Message::where('research_id', $id)->get();
            $array['research'] = Research::find($id);
            return view('admin.message.show')->with($array);
        }else{
            $applier = ResearchApplicant::where('research_id', $id)
                        ->where('status','>=', 2)
                        ->where('user_id', Auth::user()->id)
                        ->count();
            if($applier > 0){
                $array['messages'] = Message::where('research_id', $id)->get();
                $array['research'] = Research::find($id);
                return view('admin.message.show')->with($array);
            }else{
                return redirect('app/inbox');
            }
            
        }

        
        // $array['messages'] = Message::where('research_id', $id)->get();
        // $array['research'] = Research::find($id);
        // return view('admin.message.show')->with($array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

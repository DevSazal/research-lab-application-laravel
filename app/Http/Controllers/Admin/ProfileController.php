<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Skill;
use App\UserSkill;
use Auth;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
	}
    public function edit(){

        $array['user'] = User::find(Auth::user()->id);
        $array['us'] = UserSkill::where('user_id', Auth::user()->id)->get();
        $array['skills'] = Skill::all();
        return view('admin.profile.edit')->with($array);
    }
    public function update(Request $request){

	    $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:50',
	        'email' => 'required|string|email|max:255|unique:users,id,'.Auth::user()->id, //Forcing A Unique Rule To Ignore A Given ID:
	        // 'password' => 'required|string|min:6|confirmed',
            'phone'=>  'required',
            'edu_dept'=>  'required',
            'edu_varsity'=>  'required',
            'edu_country'=>  'required',
            'designation'=>  'required',
            'workplace'=>  'required',
            'file'=>  'mimes:jpg,jpeg,gif,png',
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
                            $request->file->storeAs('public/profile',$file);
                        }else{
                            $file = NULL;
                        }
                }else{
                    $file = NULL;    
                }

                $user = User::find(Auth::user()->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->edu_dept = $request->edu_dept;
                $user->edu_varsity = $request->edu_varsity;
                if($request->edu_country != "-1"){
                    $user->edu_country = $request->edu_country;
                }
                $user->designation = $request->designation;
                $user->company = $request->workplace;
                if($file != NULL){
                    $user->image = $file;
                }
                $user->save();

			    return redirect('app/profile');
		    }
    }

    public function password(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed',
	    ]);

	    //   

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

                // The request is valid...

                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
                        
			    return redirect('app/profile');
		    }
    }

    public function updateSkill(Request $request){
        $validator = Validator::make($request->all(), [
            'uskills'=>  'required',
	    ]);

	    //   

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

                // The request is valid...

                UserSkill::where('user_id', Auth::user()->id)->delete();

                $skillIdArray =  $request->uskills;
                $count = count($skillIdArray);

                for($i = 0; $i < $count; $i++){
                    $us = new UserSkill();
                    $us->skill_id = $skillIdArray[$i];
                    $us->user_id = Auth::user()->id;
                    $us->save();
                }
                        
			    return redirect('app/profile');
		    }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
// use App\Http\Requests\storeUserForm;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createUser(){
    	return view('admin.add-supervisor');
    }

    public function storeUser(Request $request)
	{
	    $validator = Validator::make($request->all(), [
	        'name' => 'required|string|max:255',
	        'email' => 'required|string|email|mak:255|unique:users',
	        'password' => 'required|string|min:6|confirmed',
            'phone'=>  'required',
            'designation'=>  'required',
            'company'=>  'required',
	    ]);

	    //  

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

		    	// The blog post is valid...

		        $user = User::create([
			    	'name' => $request->input('name'),
			    	'email' => $request->input('email'),
			    	'password' => Hash::make($request->input('password')),
			    	'phone'=> $request->input('phone'),
			    	'designation' => $request->input('designation'),
			    	'company' => $request->input('company'),
			    	'role' => 2,
			    	'power' => 1,
			    ]);

			    return redirect()->route('storeUser')->with('success', 'New supervisor added successfully!');
		    }


	    // dd($validator);


	}
}

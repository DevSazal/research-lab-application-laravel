<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Research;

// use Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
// use App\Http\Requests\storeUserForm;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller
{
    public function __construct(Guard $auth)
    {
		$this->middleware('auth');
		dd($this->currentUser = $auth->user());
		// if (Auth::user()->role > 2){

        // }else{
        //     return redirect('/app');
        // }
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

    public function createUser(){
    	
    	return view('admin.add-supervisor');
    }

    public function storeUser(Request $request)
	{
	    $validator = Validator::make($request->all(), [
	        'name' => 'required|string|max:255',
	        'email' => 'required|string|email|max:255|unique:users',
	        'password' => 'required|string|min:6|confirmed',
            'phone'=>  'required',
            'designation'=>  'required',
            'workplace'=>  'required',
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
			    	'company' => $request->input('workplace'),
			    	'role' => 2,
			    	'power' => 1,
			    ]);

			    return redirect()->route('createUser');
		    }


	    // dd($validator);


	}
	public function publish($id){

    	$user = Research::find($id);
    	$user->status = 1;
    	$user->save();

    	return redirect('app/research');

	}
	public function pending($id){

    	$user = Research::find($id);
    	$user->status = 0;
    	$user->save();

    	return redirect('app/research');

    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Skill;
use App\Research;

use Auth;

class ResearchController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $array['skills'] = Skill::all();
        return view('admin.research.create')->with($array);
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
	        'title' => 'required|string|max:255',
	        'description' => 'required|string|min:20',
	        'exp' => 'required|date',
            'rskills'=>  'required',
            'file'=>  'mimes:jpg,jpeg,gif,png,pdf,doc,docx,xls,xlsx,ppt,pptx',
	    ]);

	    //   

		if ($validator->fails()) {
		        return back()
		                ->withErrors($validator)
		                ->withInput();
		    }else{

		    	// The blog post is valid...

		        $research = Research::create([
			    	'title' => $request->input('title'),
			    	'description' => $request->input('description'),
			    	'expire_at' => $request->input('exp'),
			    	'user_id' => Auth::user()->id,
			    	'status' => 0,
			    	'fingerprint' => 111111,
			    ]);

			    return redirect('app/research');
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
        //
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

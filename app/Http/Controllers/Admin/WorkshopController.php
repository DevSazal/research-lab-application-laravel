<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Awareness;

use Auth;

class WorkshopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array['workshops'] = Awareness::orderBy('id', 'desc')->paginate(15);
        return view('admin.workshop.index')->with($array);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workshop.create');
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
            'title' => 'string|required',
            'description' => 'required|string|min:5',
            'start_date' => 'required|date',
            'fee' => 'integer|nullable',
            'contact' => 'required',

            'start_time' => 'required|date_format:H:i',
            'venue' => 'required|string|min:5',

            'type' => 'required',
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
                            $request->file->storeAs('public/trainingPhoto',$file);
                        }else{
                            $file = NULL;
                        }
                }else{
                    $file = NULL;    
                }

                $t = new Awareness();
                $t->title = $request->title;
                $t->description = $request->description;
                $t->start_date = $request->start_date;
                $t->fee = $request->fee;
                $t->contact = $request->contact;

                $t->start_time = $request->start_time;
                $t->venue = $request->venue;

                $t->type = $request->type;
                $t->file = $file;
                $t->save();

			    return redirect('app/awareness/');
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
        $array['training'] = Awareness::find($id);
        return view('admin.workshop.edit')->with($array);
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
        $validator = Validator::make($request->all(), [
            'title' => 'string|required',
            'description' => 'required|string|min:5',
            'start_date' => 'required|date',
            'fee' => 'integer|nullable',
            'contact' => 'required',

            'start_time' => 'required|date_format:H:i',
            'venue' => 'required|string|min:5',

            'type' => 'required',
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
                            $request->file->storeAs('public/trainingPhoto',$file);
                        }else{
                            $file = NULL;
                        }
                }else{
                    $file = NULL;    
                }

                $t = Awareness::find($id);
                $t->title = $request->title;
                $t->description = $request->description;
                $t->start_date = $request->start_date;
                $t->fee = $request->fee;
                $t->contact = $request->contact;

                $t->start_time = $request->start_time;
                $t->venue = $request->venue;

                $t->type = $request->type;
                if($file != NULL){
                    $t->file = $file;
                }
                $t->save();

                // return redirect('app/training/'.$id.'/edit');
                return redirect('app/awareness/');
		    }
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

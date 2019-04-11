<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainingController extends Controller
{
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
        return view('admin.training.create');
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
            'description' => 'required|string|min:20',
            'start_date' => 'required|date',
            'fee' => 'integer',
            'contact' => 'required',
            'trainer' => 'string|required',
            'trainer_description' => 'required|string|min:20',
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

                $t = new Training();
                $t->title = $request->title;
                $t->description = $request->description;
                $t->start_date = $request->start_date;
                $t->fee = $request->fee;
                $t->contact = $request->contact;
                $t->trainer_name = $request->trainer;
                $t->trainer_description = $request->trainer_description;
                $t->type = $request->type;
                $t->file = $file;
                $t->save();

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

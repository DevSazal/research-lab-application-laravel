<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Skill;
use App\Research;
use App\ResearchSkill;
use App\File;

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
                $token = date('Ymd').'x'.rand(00000000,99999999);

		        $research = Research::create([
			    	'title' => $request->title,
			    	'description' => $request->description,
			    	'expire_at' => $request->exp,
			    	'user_id' => Auth::user()->id,
			    	'status' => 0,
			    	'fingerprint' => $token,
                ]);

                $skillIdArray =  $request->rskills;
                $count = count($skillIdArray);

                for($i = 0; $i < $count; $i++){
                    $rs = new ResearchSkill();
                    $rs->skill_id = $skillIdArray[$i];
                    $rs->research_id = $research->id;
                    $rs->save();
                }
                        
                if(isset($request->file)){
                    if($request->file->getClientOriginalName()){
                            $ext = $request->file->getClientOriginalExtension();
                            $file = date('YmdHis').'_'.rand(1,999).'.'.$ext;
                            $request->file->storeAs('public/researchfile',$file);

                            $files = new File();
                            $files->file = $file;
                            $files->research_id = $research->id;
                            $files->save();
                        }else{
                            $file = NULL;
                        }
                }else{
                    $file = NULL;    
                }

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

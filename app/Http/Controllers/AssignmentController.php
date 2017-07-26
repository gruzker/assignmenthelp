<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Document;
use Illuminate\Http\Request;

use Session;
use Redirect;
use DB;

class AssignmentController extends Controller
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
        $this->validate($request,[
            'question' => 'required|string',
            'email' => 'required|email|max:100',
            'file.*' => 'max:10240|mimes:jpg,jpeg,png,bmp,pdf,txt,doc,docx,csv,rar,tar,zip,xls,ppt,sql'
        ]);              

        DB::transaction(function () use($request){
    

            $assignment = new Assignment;
            $assignment->question= $request->question;
            $assignment->email= $request->email;
            $assignment->save();

            if($request->file)
            {
                foreach($request->file as $file)
                {
                    $document= new Document;

                    $name= $file->getClientOriginalName();
                    $document->name=$name;

                    $name = time().preg_replace('/\s+/', '', $name);
                    $file->move(storage_path('app/files/'),$name);

                    $document->path=storage_path('app/files/').$name;
                    $document->assignment_id=$assignment->id;

                    $document->save();
                }
            } 
        });

        Session::flash('success','Thanks,we got your assignment.We will give quotations soon on your email.');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\sendcv;
use Illuminate\Http\Request;
use Mail;
//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;

class SendcvController extends Controller
{
    public function apply($id){
        $jobid = DB::table('jobs')->where('id',$id)->value('id');

        return view('applyjob',compact('jobid'));

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
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            #'cv'=> "required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000",
            
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255'    
        ]);

       

        $send = new sendcv();
         
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv');
            $cvName = time() . '.' . $cvPath->getClientOriginalExtension();

            $cvPath ->move("uploads/cv/".$request->jobid.'/'.$request->name.$request->lastname, $cvName );
            $send->cv = $cvName;
        };
        $send->jobs_id = $request->jobid;
        $send->name = $request->name;
        $send->lastname=$request->lastname;
        $send->phone = $request->phone;
        $send->email = $request->email;
        $send->save();
        
        Mail::send('cv_mail',[
            'name'=> $request->name,
            'lastname'=>$request->lastname,
            'phone'  =>  $request->phone,
            'cv'=>"uploads/cv/".$request->jobid.'/'.$request->name.$request->lastname."/".$cvName ,
            'jobid'=>$request->jobid
         ],function($mail) use($request){
             $mail->from($request->email,$request->name);
             
             $mail->to('info@humancapital.am')->subject("Application:|".$request->name);
         });
        
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sendcv  $sendcv
     * @return \Illuminate\Http\Response
     */
    public function show(sendcv $sendcv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sendcv  $sendcv
     * @return \Illuminate\Http\Response
     */
    public function edit(sendcv $sendcv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sendcv  $sendcv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sendcv $sendcv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sendcv  $sendcv
     * @return \Illuminate\Http\Response
     */
    public function destroy(sendcv $sendcv)
    {
        //
    }
}

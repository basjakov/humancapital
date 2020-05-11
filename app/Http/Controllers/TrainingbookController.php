<?php

namespace App\Http\Controllers;

use App\trainingbook;
use Mail;
use Illuminate\Http\Request;

//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;

class TrainingbookController extends Controller
{
    
    public function apply($id){
        $trainingid = DB::table('trainings')->where('id',$id)->value('id');

        return view('applytraining',compact('trainingid'));
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
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required'
        ]);

        trainingbook::create($request->all());
        
         Mail::send('contuct_training',[
            'name'=> $request->name,
            'lastname'=>$request->lastname,
            'phone'  =>  $request->phone,
            'email'  =>  $request->email,
            'training_id'=>$request->training_id
         ],function($mail) use($request){
             $mail->from($request->email,$request->name);
             
             $mail->to('info@humancapital.am')->subject("Training apply:|".$request->name.$request->lastname);
         });
         
        return redirect('/trainings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trainingbook  $trainingbook
     * @return \Illuminate\Http\Response
     */
    public function show(trainingbook $trainingbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trainingbook  $trainingbook
     * @return \Illuminate\Http\Response
     */
    public function edit(trainingbook $trainingbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trainingbook  $trainingbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trainingbook $trainingbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trainingbook  $trainingbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(trainingbook $trainingbook)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;



class ContactController extends Controller
{
    public function index(){
        return view('contactus');
    }
    public function contacten(){
        return view('eng.contactus');
    }
    public function sendmail(Request $request){
        $this->validate($request, [
          'name'     =>  'required',
          'email'  =>  'required|email',
          'msg' =>  'required'
         ]);

        // $data = array(
        //     'name'      =>  $request->name,
        //     'subject'      =>  $request->subject,
        //     'email' => $request->email,
        //     'tel' => $request->tel,
        //     'message'   =>   $request->msg
        // );
        

     Mail::send('email',[
            'msg'=> $request->msg,
            'tel'=>$request->tel,
            'name'  =>  $request->name
         ],function($mail) use($request){
             $mail->from($request->email,$request->name);
             
             $mail->to('info@humancapital.am')->subject($request->subject);
         });
     return redirect()->back();
    }
}

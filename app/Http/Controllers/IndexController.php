<?php

namespace App\Http\Controllers;

use App\jobs;
use App\sendcv;
use App\trainingbook;
use Illuminate\Http\Request;

//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;

class IndexController extends Controller
{
    public function homepage(){
        $jobs =  jobs::orderBy('created_at', 'desc')->paginate(5);
        return view('homepage',compact('jobs'));
    }
    public function homepageen(){
        $jobs =  jobs::where('language','english')->orderBy('created_at', 'desc')->paginate(5);
        return view('eng.homepage',compact('jobs'));
    }

    public function AdminCandidate(){ 
        $trainings = DB::table('trainingbooks')->paginate(15);
        $sendcvs = DB::table('sendcvs')->paginate(15);
        return view('dashboard.candidate',compact('trainings','sendcvs'));
    }
}

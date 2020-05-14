<?php

namespace App\Http\Controllers;

use App\jobs;
use Illuminate\Http\Request;

//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs =  DB::table('jobs')->paginate(15);
    
        return view('dashboard.home',compact('jobs'));
    }

    public function page(){

        $jobs =  DB::table('jobs')->where('language','armenian')->paginate(10);

        if(request()->has('category')){
            $jobs = jobs::where('category',request('category'))->paginate(10);
        }
    
        
        return view('vacancies',compact('jobs'));
    }

    public function page_en(){

        $jobs =  DB::table('jobs')->where('language','english')->paginate(10);

        if(request()->has('category')){
            $jobs = jobs::where('category',request('category'))->paginate(10);
        }
     
        
        return view('vacancies_en',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.addjobs');
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
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            'category' => 'required|max:255',
            'company' => 'required|max:255',
            'job_type' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required',
            'Job_responsibilities' => 'required'          
        ]);

       

        $jobs = new jobs();
         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/jobs/".$request->category.'/'.$request->company.'/'.$request->deadline.'/'.$request->title.'/', $imageName );
            $jobs->image = $imageName ;
        };
        
        
        $jobs->title =  $request->title;
        $jobs->emp_term =  $request->emp_term;
        $jobs->language = $request->language;
        $jobs->category =  $request->category;
        $jobs->company =  $request->company;
        $jobs->salery =  $request->salery;
        $jobs->job_type =  $request->job_type;
        $jobs->location =  $request->location;
        $jobs->description =  $request->description;
        $jobs->Job_responsibilities =  $request->Job_responsibilities;
        $jobs->qualifications =  $request->qualifications;
        $jobs->level =  $request->level;
        $jobs->skills =  $request->skills;
        $jobs->deadline =  $request->deadline;
        $jobs->meta_description =  $request->meta_description;
        $jobs->meta_keyword =  $request->meta_keyword;
        $jobs->distributor =  $request->distributor;
        $jobs->save();

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $job = jobs::findOrFail($id);
            return view('job',compact('job'));
    }

    public function jobsen($id){
        $job = jobs::findOrFail($id);
        return view('eng.job',compact('job'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = jobs::findOrFail($id);

        return view('dashboard.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        $jobs = jobs::find($id);

        $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            'category' => 'required|max:255',
            'company' => 'required|max:255',
            'job_type' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required',
            'Job_responsibilities' => 'required'          
        ]);

         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/jobs/".$request->category.'/'.$request->company.'/'.$request->deadline.'/'.$request->title.'/', $imageName );
            $jobs->image = $imageName ;
        };
        
        
        $jobs->title =  $request->title;
        $jobs->emp_term =  $request->emp_term;
        $jobs->category =  $request->category;
        $jobs->company =  $request->company;
        $jobs->salery =  $request->salery;
        $jobs->job_type =  $request->job_type;
        $jobs->location =  $request->location;
        $jobs->description =  $request->description;
        $jobs->Job_responsibilities =  $request->Job_responsibilities;
        $jobs->qualifications =  $request->qualifications;
        $jobs->level =  $request->level;
        $jobs->skills =  $request->skills;
        $jobs->deadline =  $request->deadline;
        $jobs->meta_description =  $request->meta_description;
        $jobs->meta_keyword =  $request->meta_keyword;
        $jobs->distributor =  $request->distributor;
        $jobs->save();

        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = jobs::find($id);



        $folder_path = 'uploads/jobs/'.$job->category.'/'.$job->company.'/'.$job->deadline.'/'.$job->title;
        
        $files = glob($folder_path.'/*');  
   
        // Deleting all the files in the list 
        foreach($files as $file) { 
           
            if(is_file($file))  
            
                // Delete the given file 
                unlink($file);  
        } 
        rmdir('uploads/jobs/'.$job->category.'/'.$job->company.'/'.$job->deadline.'/'.$job->title);
        
        $job->delete();
        
       
        return redirect('/jobs')->with('success', 'Contact deleted!');
    }
}

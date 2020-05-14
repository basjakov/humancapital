<?php

namespace App\Http\Controllers;

use App\training;
use Illuminate\Http\Request;

//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings =  DB::table('trainings')->paginate(15);
    
        return view('dashboard.training',compact('trainings'));
    }

    public function page(){
        $trainings =  DB::table('trainings')->where('language','armenian')->orderBy('created_at', 'desc')->paginate(5);
    
        return view('trainings',compact('trainings'));
    }
    public function pageen(){
        $trainings =  DB::table('trainings')->where('language','english')->orderBy('created_at', 'desc')->paginate(5);
    
        return view('eng.trainings',compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.addtraining');
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
            'title' => 'required|max:255',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        
            'description' => 'required|max:255',
            'starting' => 'required|date',   
        ]);

       

        $training = new training();
         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/training/".$request->title, $imageName );
            $training->image = $imageName ;
        };

        $training->title = $request->title;
        $training->language = $request->language;
        $training->description =$request->description;
        $training->starting = $request->starting;
        $training->end =$request->end;
        $training->location = $request->location;
        $training->organizer =$request->organizer;

        $training->meta_description = $request->meta_description;
        $training->meta_keyword =$request->meta_keyword;
        $training->distributor =$request->distributor;
        $training->save();

        return redirect('/training');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training =  training::findOrFail($id);

        return view('training',compact('training'));
    }
    public function showen($id)
    {
        $training =  training::findOrFail($id);

        return view('eng.training',compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training =  training::findOrFail($id);

        return view('dashboard.edittraining',compact('training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([       
            'title' => 'required|max:255',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        
            'description' => 'required|max:255',
            'starting' => 'required|date',   
        ]);

       

        $training = training::find($id);
         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/training/".$request->title, $imageName );
            $training->image = $imageName ;
        };

        $training->title = $request->title;
        $training->language = $request->language;
        $training->description =$request->description;
        $training->starting = $request->starting;
        $training->end =$request->end;
        $training->location = $request->location;
        $training->organizer =$request->organizer;
        $training->save();

        return redirect('/training');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = training::find($id);

        $folder_path = "uploads/training/".$training->title;
        
        $files = glob($folder_path.'/*');  
   
        // Deleting all the files in the list 
        foreach($files as $file) { 
           
            if(is_file($file))  
            
                // Delete the given file 
                unlink($file);  
        } 
        rmdir("uploads/training/".$training->title);
        
        $training->delete();
        
       
        return redirect('/training')->with('success', 'Contact deleted!');
    }
}

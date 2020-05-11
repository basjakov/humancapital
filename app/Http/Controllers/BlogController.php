<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;

//working with storage
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Detail;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs =  DB::table('blogs')->paginate(15);
    
        return view('dashboard.blog',compact('blogs'));
    }

    public function blog_page(){

        $blogs =  blog::paginate(15);
        return view('blog',compact('blogs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.createblog');
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
            'author' => 'required|max:255',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'text' => 'required'    
        ]);

       

        $blog = new blog();
         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/blog/".$request->title.'/', $imageName );
            $blog->image = $imageName ;
        };
        
        
        $blog->title =  $request->title;
        $blog->author =  $request->author;
        $blog->text =  $request->text;

        $blog->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::find($id);

        return view('post',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::find($id);

        return view('dashboard.editblog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'text' => 'required'    
        ]);

       

        $blog = blog::find($id);
         
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '.' . $imagePath ->getClientOriginalExtension();

            $imagePath ->move("uploads/blog/".$request->title.'/', $imageName );
            $blog->image = $imageName ;
        };
        
        
        $blog->title =  $request->title;
        $blog->author =  $request->author;
        $blog->text =  $request->text;

        $blog->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::find($id);
        $folder_path = 'uploads/blog/'.$blog->title;
        
        $files = glob($folder_path.'/*');  
   
        // Deleting all the files in the list 
        foreach($files as $file) { 
           
            if(is_file($file))  
            
                // Delete the given file 
                unlink($file);  
        } 
        rmdir('uploads/blog/'.$blog->title.'/');
        
        $blog->delete();
        
       
        return redirect('/blog')->with('success', 'Contact deleted!');
    }
}

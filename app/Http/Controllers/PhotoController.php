<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create ($album_id){
       return view('admin.photo.create')->with('album_id',$album_id);
   }

   public function store(Request $request){

       $this->validate($request, [
           'title' => 'required|min:5',
           'description' => 'required|min:5',
           'photo' => 'required|image',


       ]);

       if(request()->hasFile('photo')) {
           request()->validate([
               'photo' => 'file|image|max:10000',
           ]);

           $imageUrl = request()->photo->store('photo', 'public');
       }

       $photo = new Photo();
       $photo->photo = $imageUrl;
       $photo->description = $request->input('description');
       $photo->title = $request->input('title');
       $photo->album_id = $request->input('album_id');
       $photo->save();

       return redirect('/albums/'.$request->input('album_id'))->with("success", "Photo created successfully.");

   }

   public function show($id){
       $photo = Photo::find($id);
       return view('admin.photo.index')->with('photo',$photo);
   }

    public function destroy($id)
    {
        Photo::find($id)->delete();
        return redirect('/albumIndex')->with('success', "Photo deleted successfully");
    }

}


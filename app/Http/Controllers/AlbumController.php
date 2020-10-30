<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function albumIndex()
    {
        $albums = Album::with('photos')->orderBy('created_at', 'desc')->paginate(12);

        return view('admin.album.albumIndex')->with('albums', $albums);
    }


    public function showAlbum(){
     return view('admin.album.create');
 }

 public function createAlbum(Request $request){

     $this->validate($request, [
         'album_name' => 'required|min:1',
         'album_des' => 'required|min:1',
         'album_image' => 'required|image',
     ]);

     if(request()->hasFile('album_image')) {
         request()->validate([
             'album_image' => 'file|image|max:10000',
         ]);

         $imageUrl = request()->album_image->store('albums', 'public');
     }

     $album = new Album();
     $album->cover_image = $imageUrl;
     $album->description = $request->input('album_des');
     $album->name = $request->input('album_name');
     $album->save();

     return redirect('/albumIndex')->with("success", "New album created successfully.");

 }
  public function show($id){
     $album = Album::with('photos')->find($id);
      return view('admin.album.show')->with('album',$album);
  }

    public function destroy($id){
        $album = Album::find($id);
        $album->photos()->delete();
        $album->delete();
        return redirect('albumIndex')->with('success','Album Deleted Successfully');
    }

}

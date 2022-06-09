<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Album;
use App\Photo;
use App\PressRelease;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
    // index function to show home page
    public function index()
    {
        // Determine the active page
        Config::set('app.page', '/');

        $albums = Album::with('photos')->orderBy('created_at', 'desc')->take(6)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        $pressReleases = PressRelease::orderBy('created_at', 'desc')->get();
        return view('home')->with('posts', $posts)->with('albums', $albums)->with('pressReleases',$pressReleases);
    }

    public function blog()
    {
        // Determine the active page
        Config::set('app.page', 'blog');

        $posts = Post::orderBy('created_at', 'desc')->take(8)->get();
        return view('pages/blog')->with('posts', $posts);
    }

    public function read($id)
    {
        // Determine the active page
        Config::set('app.page', 'blog');

        $post = Post::find($id);
        // dd($post);
        return view('pages/read')->with('post', $post);
    }

    public function about()
    {
        // Determine the active page
        Config::set('app.page', 'about');

        return view('pages/about');
    }

    public function contact()
    {
        // Determine the active page
        Config::set('app.page', 'contact');

        return view('pages/contact');
    }

    public function albumShow($id)
    {
        $album = Album::with('photos')->find($id);
        return view('pages.album.album')->with('album', $album);
    }

    public function photoShow($id)
    {
        $photo = Photo::find($id);
        return view('pages.photo.photo')->with('photo', $photo);
    }
}
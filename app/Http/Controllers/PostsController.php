<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Config;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Config::set('app.page', 'blog');
        // dd(Config::get('app.page'));
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        // you can chain things and then add ->get() to the end;
        // Pagination is done by replacing ->get() with paginate
        // and passing the required parameter.

        // Go to the view and then add {{posts->links()}} to see pagination working
        return view('admin.adminindex')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validData = $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image'
        ]);

        if (request()->hasFile('image')) {
            request()->validate([
                'image' => 'file|image|max:10000',
            ]);

            $imageUrl = request()->image->store('uploads', 'public');
        }

        $blogPost = new Post;
        $blogPost->image = $imageUrl;
        $blogPost->title = $request->input('title');
        $blogPost->subtitle = $request->input('subtitle');
        $blogPost->body = $request->input('body');
        $blogPost->save();

        return redirect('/posts')->with("success", "New Post created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogPost = Post::find($id);
        return view('admin.view-post')->with('post', $blogPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogPost = Post::find($id);
        return view('admin.edit-post')->with('post', $blogPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        if (request()->hasFile('image')) {
            request()->validate([
                'image' => 'file|image|max:10000',
            ]);

            $imageUrl = request()->image->store('uploads', 'public');
        }

        $blogPost = Post::find($id);
        $blogPost->image = $imageUrl;
        $blogPost->title = $request->input('title');
        $blogPost->subtitle = $request->input('subtitle');
        $blogPost->body = $request->input('body');
        $blogPost->save();

        return redirect('/admin')->with('success', "Post updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return redirect('/admin')->with('success', "Post deleted successfully");
    }
}
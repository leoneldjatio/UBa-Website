<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // public function index() {
    //     $blogPosts = DB::table('blog_posts')->paginate();
    //     $number = 1;

    //     return view('admin/adminIndex',compact('blogPosts','number'));
    //  }

}

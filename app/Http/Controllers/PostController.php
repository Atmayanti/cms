<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get(); 
        $post_pages = DB::table('posts')->paginate(3); 
        // return view('shop', ['posts' => Post::index(), 'post_pages' => Post::pagin()]); 
        return view('shop', ['posts' => $posts, 'post_pages' => $post_pages]); 
    }
}


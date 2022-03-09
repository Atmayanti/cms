<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('shop', ['posts' => Post::index(), 'post_pages' => Post::pagin()]); 
    }
}


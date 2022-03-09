<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    public static function index()
    {
        $posts = Post::all();
        return $posts;
    }

    public static function pagin()
    {
        $post_pages = Post::paginate(3);
        return $post_pages;
    }
}

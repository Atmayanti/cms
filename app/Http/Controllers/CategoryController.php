<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return '<h1>Ini Halaman Category</h1>
            <a href="/category/marble-edu-games">marble edu games</a><br>
            <a href="/category/marble-and-friends-kids-games">marble and friends kids games</a><br>
            <a href="/category/riri-story-books">riri story books</a><br>
            <a href="/category/kolak-kids-songs">kolak kids song</a><br>
        ';
    }

    public function marble_edu_games(){
        return '<h1>Ini Halaman Marble Edu Games</h1>';
    }

    public function marble_and_friends_kids_games(){
        return '<h1>Ini Halaman Marble and Friends Kids Games</h1>';
    }

    public function riri_story_books(){
        return '<h1>Ini Halaman Riri Story Books</h1>';
    }

    public function kolak_kids_songs(){
        return '<h1>Ini Halaman Kolak Kids Songs</h1>';
    }
}

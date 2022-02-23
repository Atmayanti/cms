<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return '
            <h1>Hi! Selamat Datang di Educastudio</h1><br>
            <a href="/category">Category</a><br>
            <a href="/program">Program</a><br>
            <a href="/news">News</a><br>
            <a href="/about-us">About Us</a><br>
        ';
    }
}

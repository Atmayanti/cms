<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return '<h1>Ini Halaman Program</h1>
            <a href="/program/karir">karir</a><br>
            <a href="/program/magang">magang</a><br>
            <a href="/program/kunjungan-industri">kunjungan industri</a><br>
        ';
    }

    public function karir(){
        return '<h1>Ini Halaman Karir</h1>';
    }

    public function magang(){
        return '<h1>Ini Halaman Magang</h1>';
    }

    public function kunjungan_industri(){
        return '<h1>Ini Halaman Kunjungan Industri</h1>';
    }

}

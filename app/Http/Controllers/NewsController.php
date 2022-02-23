<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return '<h1>Ini Halaman News</h1>
            <a href="/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">berita 1</a><br>
        ';
    }

    public function new($slug){
        $news = [
            "title" => "Berita 1",
            "slug" => "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19",
            "author" => "Atmayanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia fugiat nesciunt laudantium, earum veritatis voluptatem? Temporibus ut repellendus laudantium corporis, consectetur laborum totam. Ullam vero adipisci, odit sapiente recusandae repudiandae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ex tenetur aut dolore, ratione hic praesentium dicta dignissimos repudiandae? Molestiae odit temporibus ab omnis nulla in nam dolores quae deleniti."
        ];
        if ($slug == $news['slug']) {
            return '<h1>'.$news['title'].'</h1>'
                .'<h3>By : '.$news['author'].'</h3>'
                .'<p>'.$news['body'].'</p>'
            ;
        } else {
            return 'Halaman tidak ditemukan';
        }
    }
}

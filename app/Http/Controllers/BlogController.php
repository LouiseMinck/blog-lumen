<?php

namespace App\Http\Controllers;

use App\Article;

class BlogController extends Controller
{

    public function __construct(){
    }

    public function home()
    {
        return view('index');
    }

    //-------------------BLOG-------------------//

    public function blog()
    {
        $articles = Article::all();
        return view('blog', ['posts' => $articles]);
    }

    //-------------------SINGLE-------------------//

    public function single($slug)
    {
        $article = Article::where("slug", "=", $slug)->firstOrFail();
        return view('single', ['post' => $article]);

    }

}

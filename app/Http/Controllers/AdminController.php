<?php

namespace App\Http\Controllers;
use Cocur\Slugify\Slugify;
use App\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){}


    //-------------------Editer-------------------//

    public function edit($slug)
    {
        return view('edit', compact('slug'));
    }

    public function editpost(Request $request, $slug)
    {
        $slugify = new Slugify();
        $slug = $slugify->slugify($request->input('titre'));

        $flight = Article::where("slug", "=", $slug)->firstOrFail();
        $flight->titre = $request->titre;
        $flight->auteur = $request->auteur;
        $flight->contenu = $request->contenu;
        $flight->slug = $slug;
        $flight->date = date("y-m-d");


        $flight->save();
    }
    //-------------------Inserer-------------------//

    public function insert()
    {
        return view('insert');
    }

    public function insertpost(Request $request)
    {
        $slugify = new Slugify();
        $slug = $slugify->slugify($request->input('titre'));

        $flight = new Article;

        $flight->titre = $request->titre;
        $flight->auteur = $request->auteur;
        $flight->contenu = $request->contenu;
        $flight->slug = $slug;
        $flight->date = date("y-m-d");


        $flight->save();
    }

    //-------------------Supprimer-------------------//

    public function delete($slug)
    {
        $flight = Article::where("slug", "=", $slug)->firstOrFail();
        $flight->delete();
    }

    //----------------------API----------------------//

    public function apiSingle($slug){
        $post = Article::where("slug", "=", $slug)->firstOrFail();
        return $post->withJson($post, 200);
    }
}

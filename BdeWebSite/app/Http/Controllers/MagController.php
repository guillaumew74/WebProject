<?php

namespace App\Http\Controllers;
use App\myform;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Input;
use App\Article;
use Illuminate\Support\Facades\Auth;


class MagController extends Controller
{




    public function showMag()
    {

        for($i = 1; $i <= 7; $i++) {

           $article = Article::where('idArticles','=',$i)->first();
           $articles[$i] = $article;

       }





       return view('mag.achat', compact('articles'));
   }
    // pull
    //tasse
    //porteclef
    //coquetelephone
    //casquette
    //t-shirt


}
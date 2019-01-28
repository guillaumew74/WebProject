<?php

namespace App\Http\Controllers;
use App\myform;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Input;
use App\Article;
use Illuminate\Support\Facades\Auth;
use App\Buy;

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


 public function confirmBuy($n){

   $article = Article::where('idArticles','=',$n)->first();

   return view('mag.confirmBuy',compact('article'))->with('numero',$n);

 }



 public function showPan() {

  for($i = 1; $i <= 7; $i++) {

   $article = Article::where('idArticles','=',$i)->first();
   $articles[$i] = $article;

 }
 return view('mag.pan', compact('articles'));
}




public function buyArticle($id){

  if (Auth::user() == null) {
    return view ('mag.successBuy', compact('article'));
  }

  else {

  $user = Auth::user();
  $iduser = $user->id;
  $inputsBuy['idArticles'] = $id;
  $inputsBuy['idUsers'] = $iduser;
  ;

  $buy = Buy::create($inputsBuy);
  $buy->save();



  $article = Article::where('idArticles', $id)->firstOrFail();

  return view ('mag.successBuy', compact('article'));
}

}


}
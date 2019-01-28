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

   $nbrOfArticles = Article::all()->count();
   $articles = Article::all();

   return view('mag.achat', compact('articles'))->with('nbrOfArticles',$nbrOfArticles);
 }




 public function confirmBuy($n){

   $article = Article::where('idArticles','=',$n)->first();

   return view('mag.confirmBuy',compact('article'))->with('numero',$n);

 }



 public function showPan() {

   if (Auth::user() == null) {
    return view ('mag.successBuy');
  }
  elseif(Auth::user() != null){

    $user = Auth::user();

    $iduser = $user->id;

    $items = Buy::where('idUsers',$iduser)->get();

    $i = 0; 

    foreach ($items as $item){
      $i++;

$itemsbought[$i] = Article::where('idArticles', $item->idArticles)->first();


    }



    return view('mag.pan', compact('itemsbought'))->with('numberOfItem',$i);
  }
  
}




public function buyArticle($id){


  if (Auth::user() == null) {
    return view ('mag.successBuy');
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
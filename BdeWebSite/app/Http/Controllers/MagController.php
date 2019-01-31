<?php

namespace App\Http\Controllers;
use App\myform;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Input;
use App\Article;
use Illuminate\Support\Facades\Auth;
use App\Buy;
use Mail;


class MagController extends Controller
{



// This function is used to show the shop

  public function showMag()
  {

   $nbrOfArticles = Article::all()->count();
   $collection = Article::all();
   $articles = $collection->sortByDesc('sold');

   return view('mag.achat', compact('articles'))->with('nbrOfArticles',$nbrOfArticles);
 }

// This function is used to show the shop for a specified categorie ($cat) 

 public function showMagCategorie($cat)
 {

   $nbrOfArticles = Article::all()->count();
   $collection = Article::where('categorie', $cat)->get();
   $articles = $collection->sortByDesc('sold');

   return view('mag.achat', compact('articles'))->with('nbrOfArticles',$nbrOfArticles);
 }

 
// This function is used to acceed to a page where you can confirm that you want to buy something 

 public function confirmBuy($n){

   $article = Article::where('idArticles','=',$n)->first();

   return view('mag.confirmBuy',compact('article'))->with('numero',$n);

 }

// This function is used to delete a reccord in the BUY(n:n) table 

 public function deleteBuy($n){

   $deletedBuy = Buy::where('idArticles','=',$n)->first()->delete();

   return redirect()->action('MagController@showPan');

 }

// This function is used to show the cart 

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

    if ($i == 0){
      return view ('mag.emptyPan');
      
    }
    else {

      return view('mag.pan', compact('itemsbought'))->with('numberOfItem',$i);
    }

  }
}

// This function is used to add a reccord into the BUY(n:n) table when you conrfirm buying something

public function buyArticle($id){ 

  if (Auth::user() == null) {
    return view ('mag.successBuy');
  }

  else {

    $user = Auth::user();
    $iduser = $user->id; 
    $inputsBuy['idArticles'] = $id;
    $inputsBuy['idUsers'] = $iduser; 
    

    $buy = Buy::create($inputsBuy);
    $buy->save();



    $article = Article::where('idArticles', $id)->firstOrFail();

    DB::table('articles')->where('idArticles', $id)->increment('sold');
    DB::table('articles')->where('idArticles', $id)->decrement('quantity');


    return view ('mag.successBuy', compact('article'));
  }

}

// This function is used to confirm your cart and send mail to both customer and BDE parts.

public function commandePan() {

 if (Auth::user() == null) {
  return view ('mag.successBuy');
}

else {


  $user = Auth::user();
  $iduser = $user->id;  

  $contents1 = Buy::where('idUsers','=',$iduser)->get();

  $contents2 = DB::table('buys')
  ->join('articles', 'buys.idArticles', '=', 'articles.idArticles')->get();


  Mail::send('mag.confirmMail', ['contents2' => $contents2], function ($message)
  {

    $message->from('bdewebsite1@gmail.com ', 'BDE_Cesi');
    $user = Auth::user();
    $iduser = $user->id;
    $message->to($user->email);


  });

  Mail::send('mag.confirmMail', ['contents2' => $contents2], function ($message)
  {

    $message->from('bdewebsite1@gmail.com', 'BDE_Cesi');
    $user = Auth::user();
    $iduser = $user->id;
    $message->to('bdewebsite1@gmail.com');


  });

}

return view ('mag.successCommande');
}
}



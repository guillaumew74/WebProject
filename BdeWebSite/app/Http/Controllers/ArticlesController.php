<?php

namespace App\Http\Controllers;

use App\myform;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

//Controller des ressources administrateur qui permet de gerer l'ajout des articles ainsi que la supression
class ArticlesController extends Controller
{

public function getForm() //fonction geteur du formulaire

    {

        return view('admin.adarticles');//retour du formulaire permettant l'ajout d'article

    }

public function insert()//fonction qui permet d'inserer en BDD des articles
    {

        $postform = Input::all(); //insert data into mysql table
        $data =

      array('name'=> $postform['name'],
            'quantity'=> $postform['quantity'],
            'price'=> $postform['price'],
            'imageLink'=> $postform['imageLink'],
            'imageLink'=> $postform['imageLink'],
            'description'=> $postform['description'],
            'categorie'=> $postform['categorie'],
        );

        $ck = 0;
        $ck = DB::table('articles')->Insert($data);

        return redirect('/adarticlesform');

    }

public function getSupArticles($id){

DB::table('articles')->where('idArticles', '=', $id)->delete();
// connection bdd qui permet de suprimer un article en fonction de son id

return view('admin.articledel');

}

}

<?php

namespace App\Http\Controllers;

use App\myform;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ArticlesController extends Controller
{

public function getForm()

    {

        return view('admin.adarticles');

    }

public function insert()
    {

        $postform = Input::all();
        //print_r($postform);
        //insert data into mysql table
        $data =

      array('name'=> $postform['name'],
            'quantity'=> $postform['quantity'],
            'price'=> $postform['price'],
            'imageLink'=> $postform['imageLink'],
            'imageLink'=> $postform['imageLink'],
            'categorie'=> $postform['categorie'],
        );
        //  echo print_r($data);
        $ck = 0;
        $ck = DB::table('articles')->Insert($data);
        //echo "Record Added Successfully!";
        return redirect('/adarticlesform');

    }

public function getSupArticles($id){

DB::table('articles')->where('idArticles', '=', $id)->delete();

return view('admin.articledel');

}

}

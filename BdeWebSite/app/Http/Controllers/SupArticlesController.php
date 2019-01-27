<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class SupArticlesController extends Controller
{

public function getSupArticles($id){

DB::table('articles')->where('idArticles', '=', $id)->delete();

return view('vue.Articledel');

}

}

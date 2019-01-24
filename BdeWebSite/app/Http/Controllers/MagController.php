<?php

namespace App\Http\Controllers;
use App\myform;
use Illuminate\Support\Facades\DB;
use Faker\Provider\DateTime;
use Illuminate\Support\Facades\Input;


class MagController extends Controller
{
    



    public function showMag()
    {
        
            $mag = DB::table('articles')->get();

        return view('mag.achat');

    }
}
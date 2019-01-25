<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//permet de gérer le user connecter
use Mail;

class SignalController extends Controller
{



public function getSignalEvent($id){

  $nom= Auth::user()->name;
  $email=Auth::user()->email;
        Mail::send('signal.signalemail',['nom'=>$nom, 'email'=>$email,'idEvents'=>$id], function($message)

        {

            $message->to('bdewebsite1@gmail.com')->subject('Signalement Evenement');

        });


        return view('signal.signalconfirm');

    }
}



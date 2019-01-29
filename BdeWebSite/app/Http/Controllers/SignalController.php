<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//permet de gérer le user connecter
use Illuminate\Support\Facades\DB;
use Mail;

//controller de signalement d'un membre du CESI
class SignalController extends Controller
{


//fonction qui envoi un mail de signalement pour un événement
public function getSignalEvent($id){

  //récupération du nom du signaleur dans la varible de session
  $nom= Auth::user()->name;

  //idem pour mail
  $email=Auth::user()->email;

  //fonction envoie de mail de la façade mail
  Mail::send('signal.signalemailevent',['nom'=>$nom, 'email'=>$email,'idEvents'=>$id], function($message){

            $message->to('bdewebsite1@gmail.com')->subject('Signalement Evenement');

            });

        //retour d'une vue confirmant le signalement au BDE
        return view('signal.signalconfirmEvent');

    }

//fonction qui permet de signaler un commentaire et qui le suprime en base
public function getSignalCom($id){

//Connection DB de la façade DB qui suprimme le com en fonction de son ID
DB::table('comments')->where('idComments', '=', $id)->delete();

//retour d'une vue confirmant le signalement de comentaire
return view('signal.signalCom');

}

//fonction de Signalement de Photo
public function getSignalPic($id){

//permet de suprimer le lien d'un image stocké en dur dans le projet
unlink("uploads/$id");

//supression en base de donné du lien symbolique
DB::table('photos')->where('ImageLink', '=', 'uploads/'.$id)->delete();

//retour d'une vue de confirmation de signalement de photo
return view('signal.signalPic');

}

}


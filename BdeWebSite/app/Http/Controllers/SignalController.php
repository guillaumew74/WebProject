<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignalRequest;
use App\models\Contact;
use Mail;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SignalController extends Controller
{

public function signalEvent(ContactRequest $request){

        Mail::send('signal.signalemail', $request->all(), function($message)

        {

            $message->to('bdewebsite1@gmail.com')->subject('Signalement Evenement');

        });


        return view('signal.signalconfirm');

    }
}



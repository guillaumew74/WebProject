<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\models\Contact;
use Mail;


class ContactController extends Controller {


    public function getForm()

    {

        return view('contact');

    }


    public function postForm(ContactRequest $request)

    {

        Mail::send('email_contact', $request->all(), function($message) 

        {

            $message->to('bdewebsite1@gmail.com')->subject('Contact');

        });


        return view('confirm');

    }


}
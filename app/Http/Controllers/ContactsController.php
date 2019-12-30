<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
   public function create()
   {
   		return view('contacts/create');
   }

   public function store(ContactsRequest $request)
   {

      $message = new Message;

      $message->name = $request->name;
      $message->email = $request->email;
      $message->message = $request->message; 

      $message->save();

   		$mailable = new ContactMessageCreated( $message);
   		//
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);
        //
        flashy('Nous vous repondrons dans les plus brefs delais!');

        return redirect()->route('home');
   }
}

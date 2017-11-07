<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit( Request $request ){
      $this->validate($request,[
        'name'  => 'required',
        'email' => 'required'
      ]);

      $message = Message::create( $request->input() );

      return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
      $messages = Message::all();
      return view('messages')->with( compact('messages') );
    }
}

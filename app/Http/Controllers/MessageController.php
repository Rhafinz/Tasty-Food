<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // ADD Message
        $this->validate( $request, [
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $message = new Message();
        $message->name =$request->name;
        $message->email =$request->email;
        $message->message =$request->message;
        $message->save();
        Alert::success('Success', 'Your message has been sent successfully!');

        return redirect()->route('kontak');
    }
}

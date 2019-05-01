<?php

namespace App\Http\Controllers;

use Pusher;
use App\Events\MessagePosted;
use App\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function getMessages()
    {
        return Message::with('user')->get();
    }

    public function create()
    {
        //
    }


    public function storeMessages(Request $request)
    {
       $message = Message::create([
           'body' => $request->body,
           'user_id' => auth()->user()->id
       ]);
       $user = auth()->user();
        broadcast(new MessagePosted($message, $user))->toOthers();


        return ['message' => 'ok'];
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

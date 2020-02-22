<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessengerController extends Controller
{
    public function index()
    {
        return view('MessengerHome');
    }

    public function getContacts()
    {
        $contacts = User::where('id','!=', auth()->id())->get();
        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        $messages = Message::where('from', $id)->orWhere('to', $id)->get();
        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = new Message();

        $message->from = auth()->id();
        $message->to = $request->contact_id;
        $message->text = $request->text;

        $message->save();

        broadcast(new NewMessage($message));

        return response()->json($message);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index() // Función para mostrar todos lo mensajes de los usuarios de más reciente a más antiguo
    {
        $messages = Message::orderby('created_at','desc')->get();
        return view('messages.index', compact('messages'));
    }
   /**
     * Show the form for creating a new resource.
     */
    public function create() // Función para mostrar el formulario para enviar mensajes
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request) // Función para guardar los comentarios en la base de datos
    {
        $message=new Message();
        $message->name=Auth::user()->name;
        $message->subject=$request->get('subject');
        $message->text=$request->get('text');
        $message->save();

        return view('messages.stored', compact('message'));
    }

    public function show(Message $message) // Función para mostrar la información detallada de los usarios en la base de datos
    {
        $message->readed=$message->readed=1;
        $message->save();
        return view('messages.show', compact('message'));
    }

    public function destroy(Message $message) // Función para eliminar el mensaje
    {
        $message->delete();
        return redirect()->route('messages');
    }

}

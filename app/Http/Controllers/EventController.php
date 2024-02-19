<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index() // Muestra los proximos eventos mostrando los eventos visibles y paginandolos de 6 en 6 y solo los proximos eventos no los que ya han pasado
    {
        $currentDate = Carbon::now();

        $events = Event::where('visible', 1)
            ->where('date', '>=', $currentDate->toDateString())
            ->orderBy('date')
            ->orderBy('hour')
            ->paginate(6);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Muestra el formulario para crear un nuevo evento
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request) // Guarda en la base de datos el nuevo evento
    {
        $event=new Event();
        $event->name=$request->get('name');
        $event->description=$request->get('description');
        $event->location=$request->get('location');
        $event->date=$request->get('date');
        $event->hour=$request->get('hour');
        $event->type=$request->get('type');
        $event->tags=$request->get('tags');
        $event->save();

        return view('events.stored', compact('event'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event) // Muestra la información detallada del evento seleccionado
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event) // Formulario para editar el evento
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event) // Guarda en la base de datos los nuevos cambios del evento
    {
        $event->name=$request->get('name');
        $event->description=$request->get('description');
        $event->location=$request->get('location');
        $event->date=$request->get('date');
        $event->hour=$request->get('hour');
        $event->type=$request->get('type');
        $event->tags=$request->get('tags');
        $event->visible=$request->has('visible')?1:0;
        $event->save();

        return view('events.edited', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function like(Event $event) // Funcion para dar like a los eventos
    {
        $event->user()->toggle(Auth::user()->id); // Toggle permite quitar el like si ya existe
        return redirect()->route('events');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event) // Funcion para eliminar el evento
    {
        $event->delete();
        return redirect()->route('events');
    }
}

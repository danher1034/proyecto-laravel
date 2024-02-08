<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('visibility',1)->paginate(6);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event=new Event();
        $event->name=$request->get('name');
        $event->slug=Str::slug($event->name);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

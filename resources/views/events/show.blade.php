@extends('layout')

@section('title')
    <a href="{{route('create')}}">Crear evento</a>
    <h1>Listado de eventos</h1>
@endsection

@section('content')

    @forelse ($events as $event)
        <div class="mb-4 mt-4 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
            <div *ngFor="let plato of platos | platoFilter:filterSearch;">
                <div class="col">
                    <div class="card">
                        <h3><a href="{{route('events.show', $event)}}">{{$event->name}}</a></h3>
                    </div>
                </div>
            </div>
        </div>
    @empty

    @endforelse

    {{$events->links()}}
@endsection
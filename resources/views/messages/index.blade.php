@extends('layout')

@section('title')
    <div class="container text-center my-auto">
        <h1>Lista de mensajes</h1>
        <br>
        <br>

    </div>
    <br>
@endsection

@section('content')
    @auth
        @if (Auth::user()->rol === 'admin')
            <div>
                <ul class="list-group">
                    @forelse ($messages as $message)
                        @if ($message->readed == '0')
                            <a href="{{ route('messages/show', $message) }}" class="list-group-item list-group-item-action">
                                <div class="fw-bold">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$message->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$message->subject}}
                                </div>
                            </a>
                        @else
                            <a href="{{ route('messages/show', $message) }}" class="list-group-item list-group-item-action list-group-item-light">
                                <div class="fw-normal">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$message->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$message->subject}}
                                </div>
                            </a>
                        @endif
                    @empty
                    @endforelse
                </ul>
            </div>
        @endif
    @endauth
    <br><br>
@endsection

@extends('layout')

@section('title')
    <div class="container text-center my-auto">
        <h1>Lista de productos</h1>
        <br>
        <br>
    </div>
    <br>
@endsection

@section('content')
    <div class="mb-4 mt-4 row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        @forelse ($products as $product)
            @if ($product->stock == '1')
                <div class="card text-center">
                    <div class="card-header"><h2 class="card-title"><a>{{$product->name}}</a></h2></div>
                        <div class="card-body">
                            <img width="250px" height="300px" src="/images/store/{{ str_replace(' ', '', strtolower($product->name)) }}.jpeg" alt="Foto de {{ $product->name }}">
                        </div>
                        <div class="card-footer text-muted">
                            Stock disponible | {{$product->price}} €
                        </div>
                </div>
            @elseif ($product->stock == '0' && Auth::check() && Auth::user()->rol=='admin')
                <div class="card text-center">
                    <div class="card-header"><h2 class="card-title"><a>{{$product->name}}</a></h2></div>
                        <div class="card-body">
                            <img width="250px" height="300px" src="/images/store/{{ str_replace(' ', '', strtolower($product->name)) }}.jpge" alt="Foto de {{ $product->name }}">
                        </div>
                        <div class="card-footer text-muted">
                            Stock no disponible | {{$product->price}} €
                        </div>
                </div>
            @endif
        @empty
        @endforelse

    </div>

    {{$products->links()}}
    <br><br>
@endsection

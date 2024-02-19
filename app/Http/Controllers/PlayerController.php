<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
use App\Models\Player;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Función para mostrar todos lo mensajes de los jugadores
    {
        $players = Player::simplePaginate(9);
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Función para mostrar el formulario para crear a un jugador
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request) // Función para guardar el nuevo jugador
    {
        $player=new Player();
        $player->name=$request->get('name');
        $player->twitter=$request->get('twitter');
        $player->instagram=$request->get('instagram');
        $player->twitch=$request->get('twitch');
        $player->save();

        return view('players.stored', compact('player'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player) // Función para mostrar información detallada sobre el jugador
    {
        return view('players.show', compact('player'));
    }

    /**
     * Display the specified resource.
     */
    public function visibility(Player $player) // Función para cambiar la visibilidad del jugador
    {
        $player->visible=$player->visible==1?0:1;
        $player->save();
        return redirect()->route('players');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player) // Función para eliminar el jugador
    {
        $player->delete();
        return redirect()->route('players');
    }
}

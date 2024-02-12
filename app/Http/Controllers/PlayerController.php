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
    public function index()
    {
        $players = Player::simplePaginate(9);
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request)
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
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Display the specified resource.
     */
    public function visibility(Player $player)
    {
        $player->visible=$player->visible==1?0:1;
        $player->save();
        return redirect()->route('players');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players');
    }
}

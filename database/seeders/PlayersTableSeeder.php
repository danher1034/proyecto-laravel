<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $players = [
            'Jaume Domènech',
            'Cristian Rivero',
            'Giorgi Mamardashvili',
            'Thierry Correia',
            'José L. Gayá',
            'Cenk Özkacar',
            'Dimitri Foulquier',
            'Jesús Vázquez',
            'Cristhian Mosquera',
            'Mouctar Diakhaby',
            'Hugo Guillamón',
            'André Almeida',
            'José Luis Pepelu',
            'Selim Amallah',
            'Fran Pérez',
            'Sergi Canós',
            'Javi Guerra',
            'Peter Federico',
            'Diego López',
            'Roman Yaremchuk',
            'Alberto Marí',
            'Hugo Duro',
        ];

        foreach ($players as $playerName) {
            $formattedName = str_replace(' ', '', strtolower($playerName));
            Player::create([
                'name' => $playerName,
                'twitter' => $formattedName,
                'instagram' => $formattedName,
                'twitch' => $formattedName,
                'visible' => 1
            ]);
        }
    }
}

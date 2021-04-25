<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {  
    $player_names = ["Joanny McClure", "Matteo Wintheiser", "Garret Price", "Ahmed Mraz"];

    $player_hand_score = $this->faker->numberBetween(0, 6);
    $generated_hand_score = $this->faker->numberBetween(0, 6);
    $is_player_winner = ($player_hand_score > $generated_hand_score) ? true : false;
    
    return [
        'player_name' => $player_names[array_rand($player_names,1)],
        'player_hand_score' => $player_hand_score,
        'generated_hand_score' => $generated_hand_score, 
        'is_player_winner' => $is_player_winner,
        'created_at' => date('Y-m-d H:m:s'),
        'updated_at' => date('Y-m-d H:m:s')
    ];
});

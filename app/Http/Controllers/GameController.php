<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Game;
use App\Http\Requests\GamePostRequest;

class GameController extends Controller
{
    public function index() {
        $game = new Game; 
        return response()->json($game->all());
    }
    
    public function getLast() {
        $game = new Game;
        return response()->json($game->latest()->first());
    }

    public function store(GamePostRequest $request) {
        $player_name = $request->name;
        $player_hand = $request->hand;

        $scores = $this->computeScores($player_hand);
        $is_player_winner = ($scores['player_score'] > $scores['generated_hand_score']) ? true : false;

        $game_arr = [
            'player_name' => $player_name,
            'player_hand_score' => $scores['player_score'],
            'generated_hand_score' => $scores['generated_hand_score'],
            'is_player_winner' => $is_player_winner,
            'created_at' => date("Y-m-d H:m:s"),
            'updated_at' => date("Y-m-d H:m:s")
        ];

        $game = new Game;
        $game->create($game_arr);
            
        return response()->json($game_arr);
    }

    public function getLeaderboard() {
        $leaderboard = DB::table('games')
            ->selectRaw('player_name,
                        count(player_name) AS GAMES, 
                        COUNT(CASE WHEN is_player_winner THEN 1 END) AS WINS, 
                        COUNT(CASE WHEN NOT is_player_winner THEN 1 END) AS LOSSES')
            ->groupBy('player_name')
            ->get();
        return response()->json($leaderboard);
    }

    public function computeScores($player_hand) {
        $player_hand = explode(' ', $player_hand);
        $generated_hand = $this->generateHand(count($player_hand));

        $player_score = $generated_hand_score = 0;
        for($i=0; $i<count($player_hand); $i++) 
            ($player_hand[$i] > $generated_hand[$i]) ? $player_score++ : $generated_hand_score++;

        return array("player_score" => $player_score, "generated_hand_score" => $generated_hand_score);
    }

    public function generateHand($number) {
        $cards = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Q', 'J', 'K');
        shuffle($cards);
        return array_slice($cards, 0, $number);
    }

}

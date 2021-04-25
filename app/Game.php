<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "games";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'player_name', 'player_hand_score', 'generated_hand_score', 'is_player_winner',
    ];

}

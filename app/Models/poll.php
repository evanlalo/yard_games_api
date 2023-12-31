<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


enum PollTypes: string {
    case Player = "player";
    case Team = "team";
}

enum PollStates: string {
    case Open = "open";
    case Closed = "closed";
}

class poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'type',
        'state'
    ];

    public function players(): MorphToMany
    {
        return $this->morphedByMany(Player::class, 'votable', 'poll_votes_pivot');
    }
 
    public function teams(): MorphToMany
    {
        return $this->morphedByMany(Team::class, 'votable', 'poll_votes_pivot');
    }
}

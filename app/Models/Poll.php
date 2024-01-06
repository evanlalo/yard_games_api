<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\DB;

enum PollTypes: string
{
    case User = 'user';
    case Team = 'team';
}

enum PollStates: string
{
    case Open = 'open';
    case Closed = 'closed';
}

class Poll extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'type',
        'state',
    ];

    protected $appends = [
        'winner',
    ];

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'votable', 'poll_votes_pivot');
    }

    public function teams(): MorphToMany
    {
        return $this->morphedByMany(Team::class, 'votable', 'poll_votes_pivot')
            ->withPivot(['votes']);
    }

    public function getWinnerAttribute()
    {
        return DB::table('poll_votes_pivot')->where('poll_id', '=', $this->id)
            ->orderByDesc('votes')->first();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'current_team'
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    public function polls(): MorphToMany
    {
        return $this->morphToMany(Poll::class, 'votable', 'poll_votes_pivot');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class team extends Model
{
    use HasFactory;

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class);
    }
}

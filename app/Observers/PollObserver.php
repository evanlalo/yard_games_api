<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Poll;
use App\Models\PollTypes;
use App\Models\Team;

class PollObserver
{
    /**
     * Handle the Poll "created" event.
     */
    public function created(Poll $poll): void
    {
        if ($poll->type == PollTypes::Team) {
            $teams = Team::all();
            $poll->teams()->attach($teams);
        }

        if ($poll->type == PollTypes::User) {
            $users = User::all();
            $poll->users()->attach($users);
        }
    }

    /**
     * Handle the Poll "updated" event.
     */
    public function updated(Poll $poll): void
    {
        //
    }

    /**
     * Handle the Poll "deleted" event.
     */
    public function deleted(Poll $poll): void
    {
        //
    }

    /**
     * Handle the Poll "restored" event.
     */
    public function restored(Poll $poll): void
    {
        //
    }

    /**
     * Handle the Poll "force deleted" event.
     */
    public function forceDeleted(Poll $poll): void
    {
        //
    }
}

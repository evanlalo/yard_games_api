<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepollRequest;
use App\Http\Requests\UpdatepollRequest;
use App\Models\Poll;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Poll::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepollRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Poll $poll)
    {
        return $poll->append('winner');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepollRequest $request, poll $poll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poll $poll)
    {
        //
    }
}

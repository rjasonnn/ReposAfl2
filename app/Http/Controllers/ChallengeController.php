<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Http\Requests\StoreChallengeRequest;
use App\Http\Requests\UpdateChallengeRequest;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChallengeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChallengeRequest $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Challenge $challenge)
    {
        //
    }

    public function showById($id)
    {
        $challenge = Challenge::find($id);

        if ($challenge) {
            return view('challengedetail', compact('challenge'));
        } else {
            return abort(404);
        }
    }

    public function showAll() {
        $challenges = Challenge::all();
        
        return view('challenges', compact('challenges'));
    } 
}

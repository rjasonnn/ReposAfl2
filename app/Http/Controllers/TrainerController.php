<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Http\Requests\StoreTrainerRequest;
use App\Http\Requests\UpdateTrainerRequest;
use App\Models\Challenge;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        $challenges = Challenge::limit(3)->get();
    
        return view('home', compact('trainers', 'challenges'));
    }
    

    public function indexAll()
    {
        $trainers = Trainer::all();
        return view('trainers', compact('trainers'));
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
    public function store(StoreTrainerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {
        //
    }

    public function showById($id)
    {
        $trainer = Trainer::find($id);

        if ($trainer) {
            return view('trainerdetail', compact('trainer'));
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrainerRequest $request, Trainer $trainer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {
        //
    }
}

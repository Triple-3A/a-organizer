<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function basicTasks()
    {
        $basics = [];
        $basicTasks = Title::where('type', 'básicos')->get();

        foreach ($basicTasks as $basicTask) {
            array_push($basics, $basicTask);
        }

        return Inertia::render('TechBasicTasks', compact('basics'));
    }

    public function instrumentalTasks()
    {
        $instrumentals = [];
        $instrumentalTasks = Title::where('type', 'instrumentales')->get();
        
        foreach ($instrumentalTasks as $instrumentalTask) {
            array_push($instrumentals, $instrumentalTask);
        }

        return Inertia::render('TechInstrumentalTasks', compact('instrumentals'));
    }

    public function advancedTasks()
    {
        $educations = [];
        $jobs = [];
        $games = [];

        $titleTasks = Title::all();

        foreach ($titleTasks as $titleTask) {
            if($titleTask->type == 'educación'){
                array_push($educations, $titleTask);
            }else if($titleTask->type == 'trabajo'){
                array_push($jobs, $titleTask);
            }else if($titleTask->type == 'juego'){
                array_push($games, $titleTask);
            }
        }

        return Inertia::render('TechAdvancedTasks', compact('educations', 'jobs', 'games'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title $title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        //
    }
}

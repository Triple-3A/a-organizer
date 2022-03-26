<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AdvancedTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $educations = [];
            $jobs = [];
            $games = [];

            $titleTasks = Title::all();

            foreach ($titleTasks as $titleTask) {
                if ($titleTask->type == 'educación') {
                    array_push($educations, $titleTask);
                } else if ($titleTask->type == 'trabajo') {
                    array_push($jobs, $titleTask);
                } else if ($titleTask->type == 'juego') {
                    array_push($games, $titleTask);
                }
            }

            return Inertia::render('TechAdvancedTitle', compact('educations', 'jobs', 'games'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $advanced = 'avanzado';
            return Inertia::render('TechCreateTitles', compact('advanced'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'type' => 'required',
            ]);
            Title::create($request->all());
            return Redirect::route('advancedTitle');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $title = Title::find($id);
            $title->delete();
            return Redirect::route('advancedTitle');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

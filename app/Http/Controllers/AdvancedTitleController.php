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
            $freeTime = [];

            $titleTasks = Title::all();
            $titleTasks->load('icons');

            foreach ($titleTasks as $titleTask) {
                if ($titleTask->type == 'educación') {
                    array_push($educations, $titleTask);
                } else if ($titleTask->type == 'trabajo') {
                    array_push($jobs, $titleTask);
                } else if ($titleTask->type == 'juego') {
                    array_push($games, $titleTask);
                } else if ($titleTask->type == 'tiempo libre') {
                    array_push($freeTime, $titleTask);
                }
            }

            return Inertia::render('Technician/Titles/TechAdvancedTitle', compact('educations', 'jobs', 'games', 'freeTime'));
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
            return Inertia::render('Technician/Titles/TechCreateTitles', compact('advanced'));
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
            $newTitle = Title::create($request->all());
            $newTitle->icons()->attach(1);
            return Redirect::route('advancedTitle');
        } catch (Exception $error) {
            return $error->getMessage();
        }
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

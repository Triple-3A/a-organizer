<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class InstrumentalTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $instrumentals = [];
            $instrumentalTasks = Title::where('type', 'instrumentales')->get();
            $instrumentalTasks->load('icons');

            foreach ($instrumentalTasks as $instrumentalTask) {
                array_push($instrumentals, $instrumentalTask);
            }

            return Inertia::render('Technician/Titles/TechInstrumentalTitle', compact('instrumentals'));
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
            $instrumental = 'instrumental';
            return Inertia::render('Technician/Titles/TechCreateTitles', compact('instrumental'));
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
            $newTitle->icons()->attach(13);
            return Redirect::route('instrumentalTitle');
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
            return Redirect::route('instrumentalTitle');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

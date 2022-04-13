<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BasicTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $basics = [];
            $basicTasks = Title::where('type', 'básicos')->get();
            $basicTasks->load('icons');

            foreach ($basicTasks as $basicTask) {
                array_push($basics, $basicTask);
            }

            return Inertia::render('Technician/Titles/TechBasicTitle', compact('basics'));
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
            $basic = 'básico';
            return Inertia::render('Technician/Titles/TechCreateTitles', compact('basic'));
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
            $newTitle->icons()->attach(2);
            return Redirect::route('basicTitle');
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
            return Redirect::route('basicTitle');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

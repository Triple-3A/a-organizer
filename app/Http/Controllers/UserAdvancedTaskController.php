<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Title;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserAdvancedTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        try {
            $student = User::find($id);
            $tasks = $student->tasks()->get();

            $allEducation = [];
            $allJob = [];
            $allGame = [];
            $allFreeTime = [];

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];

                $titles = $task->titles()->where('type', 'educación')->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);
                        array_push($allEducation, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];

                $titles = $task->titles()->where('type', 'trabajo')->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);
                        array_push($allJob, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];

                $titles = $task->titles()->where('type', 'juego')->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);
                        array_push($allGame, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];

                $titles = $task->titles()->where('type', 'tiempo libre')->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);
                        array_push($allFreeTime, $arrayGroup);
                    }
                }
            }

            // , 'allEducation', 'allJob', 'allGame', 'allFreeTime'
            // dd($allJob, $allEducation, $allFreeTime, $allGame);

            return Inertia::render('Technician/Users/TechUserAdvanced', compact('student', 'allEducation', 'allJob', 'allGame', 'allFreeTime'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function pickType($id){
        try{
            return Inertia::render('Technician/Users/Task/UserPickTypeAdvanced', compact('id'));
        }  catch (Exception $error) {
            return $error->getMessage();
        }
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $requested = $request->all();

            $id = $requested['id'];
            $advancedType = $requested['type'];
            $advancedTitles = [];
            $advanced = 'avanzado';

            $titles =  Title::where('type', $advancedType)->get();

            foreach ($titles as $title) {
                array_push($advancedTitles, $title);
            }
            // dd($id, $advanced, $advancedTitles);

            return Inertia::render('Technician/Users/Task/UserCreateTitle', compact('id', 'advanced', 'advancedTitles'));
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
            $requested = $request->all();

            $studentId = $requested['id'];
            $titleArray = $requested['title'];
            $titleId = $titleArray['id'];
            $taskRequested = array_slice($requested, 2);

            $title = Title::find($titleId);
            $task = Task::create($taskRequested);
            $studentUser = User::find($studentId);

            $title->tasks()->attach($task->id);
            $studentUser->tasks()->attach($task->id);

            return Redirect::route('techUserAdvanced', $studentId);
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
    public function deleteTask($id)
    {
        try {
            $task = Task::find($id);
            $userId = 0;
            $userCollection = $task->users()->get();
            foreach ($userCollection as $user) {
                $userId = $user->id;
            }
            $task->delete();
            return Redirect::route('techUserAdvanced', $userId);
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
    public function deleteDescription($description)
    {
        dd($description);
    }
}

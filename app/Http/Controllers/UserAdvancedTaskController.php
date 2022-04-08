<?php

namespace App\Http\Controllers;

use App\Models\Description;
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
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'educación')->get();
                $descriptions = $task->descriptions()->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);

                        foreach ($descriptions as $description) {
                            if (!empty($description)) {
                                array_push($descriptionsArray, $description);
                            }
                        }
                        array_push($arrayGroup, $descriptionsArray);
                        array_push($allEducation, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'trabajo')->get();
                $descriptions = $task->descriptions()->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);

                        foreach ($descriptions as $description) {
                            if (!empty($description)) {
                                array_push($descriptionsArray, $description);
                            }
                        }
                        array_push($arrayGroup, $descriptionsArray);
                        array_push($allJob, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'juego')->get();
                $descriptions = $task->descriptions()->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);

                        foreach ($descriptions as $description) {
                            if (!empty($description)) {
                                array_push($descriptionsArray, $description);
                            }
                        }
                        array_push($arrayGroup, $descriptionsArray);
                        array_push($allGame, $arrayGroup);
                    }
                }
            }

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'tiempo libre')->get();
                $descriptions = $task->descriptions()->get();

                foreach ($titles as $title) {
                    if (!empty($title)) {
                        array_push($taskArray, $task);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);

                        foreach ($descriptions as $description) {
                            if (!empty($description)) {
                                array_push($descriptionsArray, $description);
                            }
                        }
                        array_push($arrayGroup, $descriptionsArray);
                        array_push($allFreeTime, $arrayGroup);
                    }
                }
            }

            return Inertia::render('Technician/Users/TechUserAdvanced', compact('student', 'allEducation', 'allJob', 'allGame', 'allFreeTime'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pick($id)
    {
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
            $type = $requested['type'];
            $advancedTitles = [];
            $advanced = 'avanzado';

            $titles =  Title::where('type', $type)->get();

            foreach ($titles as $title) {
                array_push($advancedTitles, $title);
            }

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

            $id = $requested['id'];
            $titleArray = $requested['title'];
            $titleId = $titleArray['id'];
            $taskRequested = array_slice($requested, 2);

            $title = Title::find($titleId);
            $task = Task::create($taskRequested);
            $studentUser = User::find($id);

            $title->tasks()->attach($task->id);
            $studentUser->tasks()->attach($task->id);

            return Redirect::route('techUserAdvanced', $id);
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
            $task = Task::find($id);
            $student = 0;
            $userCollection = $task->users()->get();
            $descriptionCollection = $task->descriptions()->get();
            foreach ($userCollection as $user) {
                $student = $user->id;
            }
            foreach ($descriptionCollection as $description) {
                $description->delete();
            }
            $task->delete();
            return Redirect::route('techUserAdvanced', $student);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

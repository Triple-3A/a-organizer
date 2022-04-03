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

class UserInstrumentalTaskController extends Controller
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
            $allTasks = [];
            $all = [];

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'instrumentales')->get();
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
                        array_push($all, $arrayGroup);
                    }
                }
            }


            return Inertia::render('Technician/Users/TechUserInstrumental', compact('student', 'all'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        try {
            $instrumental = 'instrumental';
            $instrumentalTitles = [];

            $allTitles = Title::where('type', 'instrumentales')->get();

            foreach ($allTitles as $title) {
                array_push($instrumentalTitles, $title);
            }

            // dd($instrumentalTitles);

            return Inertia::render('Technician/Users/Task/UserCreateTitle', compact('instrumental', 'id', 'instrumentalTitles'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDescription($task)
    {
        try {
            $instrumental = 'instrumental';
            $task = Task::find($task);

            $userCollection = $task->users()->get();

            $id = 0;

            foreach ($userCollection as $user) {
                $id = $user->id;
            }

            return Inertia::render('Technician/Users/Task/UserCreateDescription', compact('instrumental', 'id', 'task'));
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

            return Redirect::route('techUserInstrumental', $studentId);
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
    public function storeDescription(Request $request)
    {
        try {
            $requested = $request->all();

            $studentId = $requested['id'];
            $task = $requested['task'];
            $taskId = $task['id'];
            $descriptionString =  array_slice($requested, 2);

            $description = Description::create($descriptionString);

            $description->tasks()->attach($taskId);

            return Redirect::route('techUserInstrumental', $studentId);
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
    public function editDescription($id)
    {
        try {
            $instrumental = 'instrumental';
            $descriptionId = $id;
            $description = Description::find($id);
            $userId = 0;
            $taskCollection = $description->tasks()->get();
            foreach ($taskCollection as $task) {
                $userCollection = $task->users()->get();

                foreach ($userCollection as $user) {
                    $userId = $user->id;
                }
            }

            return Inertia::render('Technician/Users/Task/UserEditDescription', compact('userId', 'description', 'instrumental'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $descriptionId)
    {
        try {

            $requested = $request->all();
            $id = $requested['userId'];
            $descriptionString = $requested['descriptions'];;
            $description = Description::Find($descriptionId);

            $description->update(array('description' => $descriptionString));

            return Redirect::route('techUserInstrumental', compact('id'));
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
            return Redirect::route('techUserInstrumental', $userId);
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
    public function deleteDescription($id)
    {
        try {
            $description = Description::find($id);
            $userId = 0;
            $taskCollection = $description->tasks()->get();
            foreach ($taskCollection as $task) {
                $userCollection = $task->users()->get();

                foreach ($userCollection as $user) {
                    $userId = $user->id;
                }
            }
            $description->delete();
            return Redirect::route('techUserInstrumental', $userId);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Title;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserBasicTaskController extends Controller
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

            $allTasks = $student->tasks()->get();
            $allTitles = [];

            foreach ($allTasks as $task) {
                $titles = $task->titles()->where('type', 'básicos')->get();
                foreach ($titles as $title) {
                    array_push($allTitles, $title);
                }
            }

            return Inertia::render('Technician/Users/TechUserBasic', compact('student', 'allTitles'));
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
            $basic = 'básico';
            $basicTitles = [];

            $titles =  Title::where('type', 'básicos')->get();

            foreach ($titles as $title) {
               array_push($basicTitles, $title);
            }

            // dd($basicTitles);

            return Inertia::render('Technician/Users/Task/UserCreateTitle', compact('basic', 'id', 'basicTitles'));
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
           
            return Redirect::route('techUserBasic', $studentId);
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
    public function destroy($student, $title)
    {
        dd($student, $title);
    }
}

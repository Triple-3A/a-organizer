<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserBasicDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($task)
    {
        try {
            $basic = 'básico';
            $task = Task::find($task);

            $userCollection = $task->users()->get();

            $id = 0;

            foreach ($userCollection as $user) {
                $id = $user->id;
            }

            return Inertia::render('Technician/Users/Task/UserCreateDescription', compact('basic', 'id', 'task'));
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
            $task = $requested['task'];
            $taskId = $task['id'];
            $descriptionString =  array_slice($requested, 2);

            $description = Description::create($descriptionString);

            $description->tasks()->attach($taskId);

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
        try {
            $basic = 'básico';
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

            return Inertia::render('Technician/Users/Task/UserEditDescription', compact('userId', 'description', 'basic'));
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

            return Redirect::route('techUserBasic', compact('id'));
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
            return Redirect::route('techUserBasic', $userId);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

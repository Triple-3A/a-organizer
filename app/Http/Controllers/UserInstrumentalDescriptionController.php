<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserInstrumentalDescriptionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($task)
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
            $request->validate([
                'id' => 'required',
                'task' => 'required',
            ]);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
            $request->validate([
                'userId' => 'required',
                'description' => 'required',
            ]);
            $requested = $request->all();
            $id = $requested['userId'];
            $descriptionString = $requested['description'];;
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
    public function destroy($id)
    {
        try {
            $description = Description::find($id);
            $student = 0;
            $taskCollection = $description->tasks()->get();
            foreach ($taskCollection as $task) {
                $userCollection = $task->users()->get();

                foreach ($userCollection as $user) {
                    $student = $user->id;
                }
            }
            $description->delete();
            return Redirect::route('techUserInstrumental', $student);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

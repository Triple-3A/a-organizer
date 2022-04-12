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
            $tasks = $student->tasks()->get();
            $all = [];

            foreach ($tasks as $task) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                $titles = $task->titles()->where('type', 'básicos')->get();
                $titles->load('icons');
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

            return Inertia::render('Technician/Users/TechUserBasic', compact('student', 'all'));
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
            $request->validate([
                'id' => 'required',
                'title' => 'required',
                'repeatable' => 'required',
                'startDate' => 'required',
                'finishDate' => 'required',
            ]);
            $requested = $request->all();
            $studentId = $requested['id'];
            $titleArray = $requested['title'];
            $titleId = $titleArray['id'];
            $taskRepeatable = $requested['repeatable'];
            $taskRequested = array_slice($requested, 2);
            
            $title = Title::find($titleId);
            $studentUser = User::find($studentId);

            if ($taskRepeatable == true){
                $task = Task::create(["repeatable" => true]);
            } else if ($taskRepeatable == false) {
                $task = Task::create($taskRequested);
            }      
            $title->tasks()->attach($task->id);
            $studentUser->tasks()->attach($task->id);

            return Redirect::route('techUserBasic', $studentId);
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
            return Redirect::route('techUserBasic', $student);
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

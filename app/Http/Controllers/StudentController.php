<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Student;
use App\Models\User;
use App\Models\Task;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $userId = auth()->id();
            $currentStudent = Student::where('user_id', $userId)->get();

            if ($currentStudent->pluck('nickname')[0] === null) {
                return Inertia::render('Student/StudentName');
            } else {
                return Redirect::route('studentTasks');
            }
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function assignStudentNickname(Request $request)
    {
        try {
            $request->validate([
                'nickname' => 'required',
            ]);
            $userId = auth()->id();
            $currentStudent = Student::where('user_id', $userId)->get();
            foreach ($currentStudent as $student) {
                $studentOne = $student;
            }
            $studentOne->update($request->all());

            return Redirect::route('studentTasks');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function studentTasks()
    {
        try {
            $user = auth()->user();
            $tasksUser = $user->tasks()->get();
            $all = [];
            foreach ($tasksUser as $taskUser) {
                $arrayGroup = [];
                $taskArray = [];
                $titlesArray = [];
                $descriptionsArray = [];

                if ($taskUser->startDate <= date("Y-m-d") || $taskUser->repeatable == true) {
                    $titles = $taskUser->titles()->get();
                    $titles->load('icons');
                    $descriptions = $taskUser->descriptions()->get();

                    foreach ($titles as $title) {
                        array_push($taskArray, $taskUser);
                        array_push($arrayGroup, $taskArray);
                        array_push($titlesArray, $title);
                        array_push($arrayGroup, $titlesArray);

                        foreach ($descriptions as $description) {
                            array_push($descriptionsArray, $description);
                        }
                        array_push($arrayGroup, $descriptionsArray);
                        array_push($all, $arrayGroup);
                    }
                }
            }

            $currentStudent = Student::where('user_id', $user->id)->get();
            foreach ($currentStudent as $student) {
                $student = $student;
            }
            $username = $student->nickname;
            return Inertia::render('Student/StudentIndex', compact('username', 'all'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function doneTask(Request $request)
    {
        try {
            $request->validate([
                'task_id' => 'required',
                'done' => 'required',
            ]);
            $allRequest =  $request->all();
            $taskId = $allRequest['task_id'];
            $slicedRequest = array_slice($allRequest, 1);

            $task = Task::where('id', $taskId)->get();

            $task[0]->update(["done" => true]);
            
            return Redirect::back();
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

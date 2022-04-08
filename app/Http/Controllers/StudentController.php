<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Student;
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
                return Redirect::route('studentPic');
            }
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function assignStudentNickname(Request $request)
    {
        $userId = auth()->id();
        $currentStudent = Student::where('user_id', $userId)->get();

        foreach ($currentStudent as $student) {
            $studentOne = $student;
        }
        
        $studentOne->update($request->all());

        return Redirect::route('studentPic');
    }

    public function studentPic()
    {

        try {
            $userId = auth()->id();
            $currentStudent = Student::where('user_id', $userId)->get();

            if ($currentStudent->pluck('avatar')[0] === null) {
                return Inertia::render('Student/StudentPic');
            } else {
                return Redirect::route('studentTasks');
            }

        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function assignStudentPic(Request $request)
    {
        $userId = auth()->id();
        $currentStudent = Student::where('user_id', $userId)->get();
        foreach ($currentStudent as $student) {
            $studentOne = $student;
        }
        $studentOne->update($request->all());

        return Redirect::route('studentTasks');
    }

    public function studentTasks()
    {
        try {
            $userId = auth()->id();
            $userTasks = User::where("id", $userId)->first()->tasks()->get();
            dd($userDoneTasks = $userTasks->where("done", true));
            $totalTasks = 0;
            $totalDoneTasks = 0;

            foreach ($userDoneTasks as $task) {
                $totalDoneTasks++;
            }

            foreach ($userTasks as $task) {
                $totalTasks++;
            }

            return Inertia::render('Student/StudentIndex', compact("userTasks", "totalTasks", "totalDoneTasks"));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function markTaskAsDone(Request $request)
    {
        try {
            $currentTask = Task::where('id', $request->get('id'))->first()->get();
            foreach ($currentTask as $student) {
                $task = $student;
            }
            $task->update($request->all());

            return Redirect::route('studentTasks');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}

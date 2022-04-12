<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Student;
use App\Models\User;

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
    }

    // public function studentPic()
    // {

    //     try {
    //         $userId = auth()->id();
    //         $currentStudent = Student::where('user_id', $userId)->get();

    //         if ($currentStudent->pluck('avatar')[0] === null) {
    //             return Inertia::render('Student/StudentPic');
    //         } else {
    //             return Redirect::route('studentTasks');
    //         }
    //     } catch (Exception $error) {
    //         return $error->getMessage();
    //     }
    // }

    // public function assignStudentPic(Request $request)
    // {
    //     // $request->validate([
    //     //     'pic' => 'required',
    //     // ]);
    //     $userId = auth()->id();
    //     $currentStudent = Student::where('user_id', $userId)->get();
    //     foreach ($currentStudent as $student) {
    //         $studentOne = $student;
    //     }
    //     $studentOne->update($request->all());

    //     return Redirect::route('studentTasks');
    // }

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

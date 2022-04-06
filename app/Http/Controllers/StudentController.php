<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\Student;

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
            dd($currentStudent = Student::where('user_id', $userId)->get());

            dd($currentStudent->pluck('nickname'));

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
            return Inertia::render('Student/StudentIndex');
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

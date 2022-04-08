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
        try {
            $userId = auth()->id();
            $currentStudent = Student::where('user_id', $userId)->get();
            foreach ($currentStudent as $student) {
                $studentOne = $student;
            }
            $studentOne->update($request->all());

            return Redirect::route('studentPic');
        } catch (Exception $error) {
            return $error->getMessage();
        }
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
        try {
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
            return Inertia::render('Student/StudentIndex');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

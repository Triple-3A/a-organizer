<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Technician;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TechnicianUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $studentsUsers = [];

            $user = auth()->user();

            $technicianId = Technician::where('user_id', $user->id)->value('id');

            $students = Student::where('technician_id', $technicianId)->get();

            foreach ($students as $student) {
                $userId = User::where('id', $student->user_id)->value('id');
                $user = User::find($userId);
                array_push($studentsUsers, $user);
            }

            return Inertia::render('Technician/Users/TechUsers', compact('studentsUsers'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function technicianUsersProfile($id)
    {
        try {
            $student = User::where('id', $id)->get();
            return Inertia::render('Technician/Users/TechUsersProfile', compact('student'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}

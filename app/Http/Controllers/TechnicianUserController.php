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

            return Inertia::render('TechnicianUsers', compact('studentsUsers'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function technicianUsersProfile()
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

            return Inertia::render('TechnicianUsersProfile');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function techUserBasic()
    {
        try {
            return Inertia::render('TechUserBasic');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function techUserInstrumental()
    {
        try {
            return Inertia::render('TechUserInstrumental');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function techUserAdvanced()
    {
        try {
            return Inertia::render('TechUserAdvanced');
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
<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Technician;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = auth()->user()->name;
        return Inertia::render('TechnicianIndex', compact('username'));
    }

    public function categories()
    {
        return Inertia::render('TechnicianCategories');
    }


    public function technicianUsers()
    {
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
    }

    public function technicianUsersProfile()
    {
        $studentsUsers = [];

        $user = auth()->user();
        
        $technicianId = Technician::where('user_id', $user->id)->value('id');
        
        $students = Student::where('technician_id', $technicianId)->get();

        foreach ($students as $student) {
            $userId = User::where('id', $student->user_id)->value('id');
            $user = User::find($userId);
            array_push($studentsUsers, $user);
        }
        
        return Inertia::render('TechnicianUsersProfile', compact('studentsUsers'));
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

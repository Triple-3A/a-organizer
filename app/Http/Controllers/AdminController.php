<?php

namespace App\Http\Controllers;

use App;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Laravel\Fortify\Contracts\RegisterViewResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technicianUsers = Role::where('role', 'technician')->first()->users()->get();
        $studentUsers = Role::where('role', 'student')->first()->users()->get();
        $standByUsers = Role::where('role', 'standBy')->first()->users()->get();
        return Inertia::render('Admin', compact('technicianUsers', 'studentUsers', 'standByUsers'));
    }

    public function reassignRole(Request $request)
    {

        $userId = $request->get('userId');
        $newRoleId = $request->get('roleId');
        $currentRoleId = $request->get('currentRoleId');

        $user = User::find($userId);

        if ($currentRoleId == 1) {
            if ($newRoleId == 3) {
                Technician::create(array('user_id' => $userId));
            }
            if ($newRoleId == 4) {
                Student::create(array('user_id' => $userId));
            }
        }

        if ($currentRoleId == 3) {
            $technician = Technician::where('user_id', $userId)->firstOrFail();
            $technician->delete();
            Student::create(array('user_id' => $userId));
        }

        if ($currentRoleId == 4) {
            $student = Student::where('user_id', $userId)->firstOrFail();
            $student->delete();
            Technician::create(array('user_id' => $userId));
        }

        $user->roles()->detach();
        $user->roles()->attach($newRoleId);

        return Redirect::back();
    }

    public function assignment()
    {
        $roleTech = Role::find(3);
        $technicians = $roleTech->users;

        $roleStudents = Role::find(4);
        $students = $roleStudents->users;

        return Inertia::render('AdminAssignment', compact('technicians', 'students'));
    }

    public function assignTechToStudent($technician)
    {
        dd($technician);
        return Redirect::route('AdminAssignment');
    }

    public function assigned()
    {
        return Inertia::render('Assigned');
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

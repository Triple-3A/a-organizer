<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

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

    public function reassignRole($roleId)
    {
        dd($roleId);
        $user = auth()->user();
        $user->roles()->detach();
        $user->roles()->attach($roleId);
    }
   
    public function assignment()
    {
        $roleTech = Role::find(3);
        $technicians = $roleTech->users;

        $roleStudents = Role::find(4);
        $students = $roleStudents->users;

        return Inertia::render('AdminAssignment', compact('technicians', 'students'));
    }

    public function assignTechToStudent(Request $request){
        dd($request);
        return Redirect::route('Admin');
    }

    public function assigned()
    {   
        $studentsTech = [];
        $technicianStu= [];
        dd(User::technicians()->get());
        $user = User::find('6');
        $technicians = Technician::where('user_id', $user->id)->value('id');
        $students = Student::where('technician_id', $technicians)->get();
        $technicians = Technician::where('user_id', $user->id)->get();
        
        foreach ($students as $student) {

                $userId = User::where('id', $student->user_id)->value('id');
                $user=User::find($userId);
                array_push($studentsTech, $user);
            }
            
        foreach ($technicians as $technician) {
            $userId = User::where('id', $technician->user_id)->value('id');
            $user=User::find($userId);
            array_push($technicianStu, $user);
        }
            
            // dd($technicianStu);

        return Inertia::render('Assigned', compact('studentsTech', 'technicianStu'));
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

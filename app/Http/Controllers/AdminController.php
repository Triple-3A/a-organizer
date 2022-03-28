<?php

namespace App\Http\Controllers;

use App;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use App\Models\User;
use App\Models\Student;
use App\Models\Technician;
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
        try {
            $technicianUsers = Role::where('role', 'technician')->first()->users()->get();
            $studentUsers = Role::where('role', 'student')->first()->users()->get();
            $standByUsers = Role::where('role', 'standBy')->first()->users()->get();
            return Inertia::render('Admin/AdminIndex', compact('technicianUsers', 'studentUsers', 'standByUsers'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function reassignRole(Request $request)
    {
        try {
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
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function studentAsignment()
    {
        try {
            $techniciansModels = Technician::all();
            $studentsModels = Student::all();
            $technicians = [];
            $students = [];

            foreach($techniciansModels as $index){ 
                array_push($technicians, User::find($index->user_id));
            }
            
            foreach($studentsModels as $index){ 
                array_push($students, User::find($index->user_id));
            }

            return Inertia::render('Admin/AdminAssignStudents', compact('technicians', 'students'));
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function assignTechToStudent(Request $request)
    {
        try {
            $array = [];
            $both = [];
            $technicianArray = [];
            $studentArray = [];
            array_push($array, $request->all());

            foreach ($array as $index) {
                foreach ($index as $i) {
                    array_push($both, $i);
                }
            }

            array_push($technicianArray, $both[0]);
            array_push($studentArray, $both[1]);

            foreach ($technicianArray as $index) {
                $technicianUserId = $index['id'];
            }
            
            foreach ($studentArray as $index) {
                $studentUserId = $index['id'];
            }

            $technicianId = Technician::where('user_id', $technicianUserId)->value('id');
            Student::where('user_id', $studentUserId)->update(array('technician_id' => $technicianId));

            return Inertia::render('Admin/AdminAssignStudents');
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function assignStudent()
    {
        try {
            $techs = [];
            $studentTechs= [];
            $allTechs = Technician::all();

            foreach ($allTechs as $allTech) {
                $students = [];
                array_push($techs, User::find($allTech->user_id));
                $allStudents = Student::where('technician_id', $allTech->id)->get();
                foreach($allStudents as $student){
                    array_push($students, User::find($student->user_id));
                }
                array_push($studentTechs , $students);
            }

            return Inertia::render('Admin/AdminTechStudents', compact('techs', 'studentTechs'));
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

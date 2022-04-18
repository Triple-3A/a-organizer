<?php

namespace Tests\Feature;
use App\Models\Role;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_standBy_role()
    {
        Role::create(array(
            'role' => "standBy",
        ));

        $this->assertDatabaseHas('roles', [
            'role' => 'standBy',
        ]);
    }

    public function test_admin_role()
    {
        Role::create(array(
            'role' => "admin",
        ));

        $this->assertDatabaseHas('roles', [
            'role' => 'admin',
        ]);
    }

    public function test_technician_role()
    {
        Role::create(array(
            'role' => "technician",
        ));

        $this->assertDatabaseHas('roles', [
            'role' => 'technician',
        ]);
    }

    public function test_student_role()
    {
        Role::create(array(
            'role' => "student",
        ));

        $this->assertDatabaseHas('roles', [
            'role' => 'student',
        ]);
    }
}


<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database_email_standBy()
    {
        $response = $this->assertDatabaseHas('users', [
            'name' => 'standBy',
            'email' => 'standBy@gmail.com',
        ]);
    }

    public function test_database_email_admin()
    {
        $response = $this->assertDatabaseHas('users', [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
    }

    public function test_database_email_student()
    {
        $response = $this->assertDatabaseHas('users', [
            'name' => 'student',
            'email' => 'student@gmail.com',
        ]);
    }

    public function test_database_email_technician()
    {
        $response = $this->assertDatabaseHas('users', [
            'name' => 'technician',
            'email' => 'technician@gmail.com',
        ]);
    }
}

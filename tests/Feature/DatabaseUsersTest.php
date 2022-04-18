<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class DatabaseUsersTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database_email_standBy()
    {
        User::create(array(
            'name' => "standBy",
            'email' => "standBy@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ));

        $this->assertDatabaseHas('users', [
            'name' => 'standBy',
            'email' => 'standBy@gmail.com',
        ]);
    }

    public function test_database_email_admin()
    {
        User::create(array(
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ));

        $this->assertDatabaseHas('users', [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
    }

    public function test_database_email_student()
    {
        User::create(array(
            'name' => "student",
            'email' => "student@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ));

        $this->assertDatabaseHas('users', [
            'name' => 'student',
            'email' => 'student@gmail.com',
        ]);
    }

    public function test_database_email_technician()
    {
        User::create(array(
            'name' => "technician",
            'email' => "technician@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ));

        $this->assertDatabaseHas('users', [
            'name' => 'technician',
            'email' => 'technician@gmail.com',
        ]);
    }
}

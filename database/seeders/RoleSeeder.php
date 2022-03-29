<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $standBy = Role::create(array(
            'role' => "standBy",
        ));

        $admin = Role::create(array(
            'role' => "admin",
        ));

        $technician = Role::create(array(
            'role' => "technician",
        ));

        $student = Role::create(array(
            'role' => "student",
        ));
    }
}

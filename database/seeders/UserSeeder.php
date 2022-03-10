<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        for ($id = 1; $id <= 10; $id++) {

            DB::table('role_user')->insert(
                [
                    'role_id' => Role::select('id')->orderByRaw("RAND()")->first()->id,
                    'user_id' => User::select('id')->where('id', $id)->first()->id,
                ]
            );

        }

        $standBy = User::create(array(
            'name' => "standBy",
            'email' => "standBy@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$s.ReCUJHJq8TpVTg.ls5SukjrY34OUyXMzgC01KFomMaBRiRKPM7i',
            'remember_token' => Str::random(10),
        ));

        $standBy->roles()->sync([1]);

        $admin = User::create(array(
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$s.ReCUJHJq8TpVTg.ls5SukjrY34OUyXMzgC01KFomMaBRiRKPM7i',
            'remember_token' => Str::random(10),
        ));

        $admin->roles()->sync([2]);

        $technician = User::create(array(
            'name' => "technician",
            'email' => "technician@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$s.ReCUJHJq8TpVTg.ls5SukjrY34OUyXMzgC01KFomMaBRiRKPM7i',
            'remember_token' => Str::random(10),
        ));

        $technician->roles()->sync([3]);

        $student = User::create(array(
            'name' => "student",
            'email' => "student@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$s.ReCUJHJq8TpVTg.ls5SukjrY34OUyXMzgC01KFomMaBRiRKPM7i',
            'remember_token' => Str::random(10),
        ));

        $student->roles()->sync([4]);
    }
}

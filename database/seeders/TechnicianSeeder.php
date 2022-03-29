<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Role;
use App\Models\User;

class TechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($id = 6; $id <= 9; $id++) {
            DB::table('role_user')->insert(
                [
                    'role_id' => Role::select('id')->where('id', 3)->first()->id,
                    'user_id' => User::select('id')->where('id', $id)->first()->id,
                ]
            );
        }

    }
}

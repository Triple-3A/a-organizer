<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Description;
use App\Models\Task;
use App\Models\User;
use App\Models\Title;

class UserTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Task::factory(10)->create();

        for ($id = 1; $id <= 10; $id++) {
            DB::table('task_title')->insert(
                [
                    'task_id' => Task::select('id')->orderByRaw("RAND()")->first()->id,
                    'title_id' => Title::select('id')->where('id', $id)->first()->id,
                ]
            );
        }

        for ($id = 1; $id <= 10; $id++) {
            DB::table('task_user')->insert(
                [
                    'task_id' => Task::select('id')->orderByRaw("RAND()")->first()->id,
                    'user_id' => User::select('id')->where('id', $id + 4)->first()->id,
                ]
            );
        }

        Description::factory(10)->create();

        for ($id = 1; $id <= 10; $id++) {
            DB::table('description_task')->insert(
                [
                    'task_id' => Task::select('id')->orderByRaw("RAND()")->first()->id,
                    'description_id' => Description::select('id')->where('id', $id)->first()->id,
                ]
            );
        }
    }
}

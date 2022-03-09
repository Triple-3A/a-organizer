<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Description;
use App\Models\Icon;
use App\Models\Task;
use App\Models\Title;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Description::factory(10)->create();
        Icon::factory(10)->create();
        Task::factory(10)->create();
        Title::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

    }
}

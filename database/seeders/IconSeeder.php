<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;
use App\Models\Title;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Icon::factory(10)->create();

        for ($id = 1; $id <= 10; $id++) {
            DB::table('icon_title')->insert(
                [
                    'icon_id' => Icon::select('id')->orderByRaw("RAND()")->first()->id,
                    'title_id' => Title::select('id')->where('id', $id)->first()->id,
                ]
            );
        }

        $basic = Icon::create(array(
            'icon' => "images/basic.png",
        ));

        $instrumental = Icon::create(array(
            'icon' => "images/instrumental.png",
        ));

        $advanced = Icon::create(array(
            'icon' => "images/advanced.png",
        ));
    }
}

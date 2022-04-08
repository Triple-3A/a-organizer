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
        $advanced = Icon::create(array(
            'icon' => "/images/advanced.png",
        ));

        $basic = Icon::create(array(
            'icon' => "/images/basic.png",
        ));

        $beach = Icon::create(array(
            'icon' => "/images/beach.png",
        ));

        $bedroom = Icon::create(array(
            'icon' => "/images/bedroom.png",
        ));

        $brush = Icon::create(array(
            'icon' => "/images/brush.png",
        ));

        $community = Icon::create(array(
            'icon' => "/images/community.png",
        ));

        $compass = Icon::create(array(
            'icon' => "/images/compass.png",
        ));

        $deal = Icon::create(array(
            'icon' => "/images/deal.png",
        ));

        $dog = Icon::create(array(
            'icon' => "/images/dog.png",
        ));

        $finances = Icon::create(array(
            'icon' => "/images/finances.png",
        ));

        $health = Icon::create(array(
            'icon' => "/images/health.png",
        ));

        $home = Icon::create(array(
            'icon' => "/images/home.png",
        ));

        $instrumental = Icon::create(array(
            'icon' => "/images/instrumental.png",
        ));

        $messagging = Icon::create(array(
            'icon' => "/images/messaging.png",
        ));

        $pan = Icon::create(array(
            'icon' => "/images/pan.png",
        ));

        $play = Icon::create(array(
            'icon' => "/images/play.png",
        ));

        $relationship = Icon::create(array(
            'icon' => "/images/relationship.png",
        ));

        $salad = Icon::create(array(
            'icon' => "/images/salad.png",
        ));

        $studies = Icon::create(array(
            'icon' => "/images/studies.png",
        ));

        $toilet = Icon::create(array(
            'icon' => "/images/toilet.png",
        ));

        $traffic = Icon::create(array(
            'icon' => "/images/traffic.png",
        ));

        $work = Icon::create(array(
            'icon' => "/images/work.png",
        ));

        $baby = Icon::create(array(
            'icon' => "/images/baby.png",
        ));

        $shoe = Icon::create(array(
            'icon' => "/images/shoe.png",
        ));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Icon;
use App\Models\Title;

class IconTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 5)->first()->id,
                'title_id' => Title::select('id')->where('id', 1)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 20)->first()->id,
                'title_id' => Title::select('id')->where('id', 2)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 24)->first()->id,
                'title_id' => Title::select('id')->where('id', 3)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 4)->first()->id,
                'title_id' => Title::select('id')->where('id', 4)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 15)->first()->id,
                'title_id' => Title::select('id')->where('id', 5)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 18)->first()->id,
                'title_id' => Title::select('id')->where('id', 6)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 21)->first()->id,
                'title_id' => Title::select('id')->where('id', 7)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 17)->first()->id,
                'title_id' => Title::select('id')->where('id', 8)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 9)->first()->id,
                'title_id' => Title::select('id')->where('id', 9)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 23)->first()->id,
                'title_id' => Title::select('id')->where('id', 10)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 14)->first()->id,
                'title_id' => Title::select('id')->where('id', 11)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 13)->first()->id,
                'title_id' => Title::select('id')->where('id', 12)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 10)->first()->id,
                'title_id' => Title::select('id')->where('id', 13)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 12)->first()->id,
                'title_id' => Title::select('id')->where('id', 14)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 11)->first()->id,
                'title_id' => Title::select('id')->where('id', 15)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 19)->first()->id,
                'title_id' => Title::select('id')->where('id', 16)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 1)->first()->id,
                'title_id' => Title::select('id')->where('id', 17)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 8)->first()->id,
                'title_id' => Title::select('id')->where('id', 18)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 22)->first()->id,
                'title_id' => Title::select('id')->where('id', 19)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 6)->first()->id,
                'title_id' => Title::select('id')->where('id', 20)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 16)->first()->id,
                'title_id' => Title::select('id')->where('id', 21)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 7)->first()->id,
                'title_id' => Title::select('id')->where('id', 22)->first()->id,
            ]
        );
        
        DB::table('icon_title')->insert(
            [
                'icon_id' => Icon::select('id')->where('id', 3)->first()->id,
                'title_id' => Title::select('id')->where('id', 23)->first()->id,
            ]
        );
    }
}

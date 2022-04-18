<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Icon;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseIconsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_advanced_icon()
    {
        Icon::create(array(
            'icon' => "/images/advanced.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/advanced.png',
        ]);
    }

    public function test_basic_icon()
    {
        Icon::create(array(
            'icon' => "/images/basic.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/basic.png',
        ]);
    }

    public function test_beach_icon()
    {
        Icon::create(array(
            'icon' => "/images/beach.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/beach.png',
        ]);
    }

    public function test_bedroom_icon()
    {
        Icon::create(array(
            'icon' => "/images/bedroom.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/bedroom.png',
        ]);
    }

    public function test_brush_icon()
    {
        Icon::create(array(
            'icon' => "/images/brush.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/brush.png',
        ]);
    }

    public function test_community_icon()
    {
        Icon::create(array(
            'icon' => "/images/community.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/community.png',
        ]);
    }

    public function test_compass_icon()
    {
        Icon::create(array(
            'icon' => "/images/compass.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/compass.png',
        ]);
    }

    public function test_deal_icon()
    {
        Icon::create(array(
            'icon' => "/images/deal.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/deal.png',
        ]);
    }

    public function test_dog_icon()
    {
        Icon::create(array(
            'icon' => "/images/dog.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/dog.png',
        ]);
    }

    public function test_finances_icon()
    {
        Icon::create(array(
            'icon' => "/images/finances.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/finances.png',
        ]);
    }

    public function test_health_icon()
    {
        Icon::create(array(
            'icon' => "/images/health.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/health.png',
        ]);
    }

    public function test_home_icon()
    {
        Icon::create(array(
            'icon' => "/images/home.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/home.png',
        ]);
    }

    public function test_instrumental_icon()
    {
        Icon::create(array(
            'icon' => "/images/instrumental.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/instrumental.png',
        ]);
    }

    public function test_messaging_icon()
    {
        Icon::create(array(
            'icon' => "/images/messaging.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/messaging.png',
        ]);
    }

    public function test_pan_icon()
    {
        Icon::create(array(
            'icon' => "/images/pan.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/pan.png',
        ]);
    }

    public function test_play_icon()
    {
        Icon::create(array(
            'icon' => "/images/play.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/play.png',
        ]);
    }

    public function test_relationship_icon()
    {
        Icon::create(array(
            'icon' => "/images/relationship.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/relationship.png',
        ]);
    }

    public function test_salad_icon()
    {
        Icon::create(array(
            'icon' => "/images/salad.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/salad.png',
        ]);
    }

    public function test_studies_icon()
    {
        Icon::create(array(
            'icon' => "/images/studies.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/studies.png',
        ]);
    }

    public function test_toilet_icon()
    {
        Icon::create(array(
            'icon' => "/images/toilet.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/toilet.png',
        ]);
    }

    public function test_traffic_icon()
    {
        Icon::create(array(
            'icon' => "/images/traffic.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/traffic.png',
        ]);
    }

    public function test_work_icon()
    {
        Icon::create(array(
            'icon' => "/images/work.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/work.png',
        ]);
    }

    public function test_baby_icon()
    {
        Icon::create(array(
            'icon' => "/images/baby.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/baby.png',
        ]);
    }

    public function test_shoe_icon()
    {
        Icon::create(array(
            'icon' => "/images/shoe.png",
        ));

        $this->assertDatabaseHas('icons', [
            'icon' => '/images/shoe.png',
        ]);
    }
}

<?php

namespace Tests\Feature;

use App\Models\Title;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TitleTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_basic_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test basic title 1',
            'type' => 'básico'
        ]);

        $title2 = Title::make([
            'title' => 'Test basic title 2',
            'type' => 'básico'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_basic_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicTitle/store', [
            'title' => 'Test basic title',
            'type' => 'básico'
        ])->assertRedirect('/basicTitle');

    }

    public function test_basic_title_delete()
    {
        $title = Title::make([
            'title' => 'Test basic title',
            'type' => 'básico'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    public function test_instrumental_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test instrumental title 1',
            'type' => 'instrumental'
        ]);

        $title2 = Title::make([
            'title' => 'Test instrumental title 2',
            'type' => 'instrumental'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_instrumental_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicInstrumental/store', [
            'title' => 'Test instrumental title',
            'type' => 'instrumental'
        ])->assertRedirect('/instrumentalTitle');

    }

    public function test_instrumental_title_delete()
    {
        $title = Title::make([
            'title' => 'Test instrumental title',
            'type' => 'instrumental'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    public function test_education_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test education title 1',
            'type' => 'educación'
        ]);

        $title2 = Title::make([
            'title' => 'Test education title 2',
            'type' => 'educación'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_education_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicAdvanced/store', [
            'title' => 'Test educación title',
            'type' => 'educación'
        ])->assertRedirect('/advancedTitle');

    }

    public function test_education_title_delete()
    {
        $title = Title::make([
            'title' => 'Test education title',
            'type' => 'educación'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    public function test_job_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test job title 1',
            'type' => 'trabajo'
        ]);

        $title2 = Title::make([
            'title' => 'Test job title 2',
            'type' => 'trabajo'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_job_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicAdvanced/store', [
            'title' => 'Test job title',
            'type' => 'trabajo'
        ])->assertRedirect('/advancedTitle');

    }

    public function test_job_title_delete()
    {
        $title = Title::make([
            'title' => 'Test job title',
            'type' => 'trabajo'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    public function test_game_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test game title 1',
            'type' => 'juego'
        ]);

        $title2 = Title::make([
            'title' => 'Test game title 2',
            'type' => 'juego'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_game_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicAdvanced/store', [
            'title' => 'Test game title',
            'type' => 'juego'
        ])->assertRedirect('/advancedTitle');

    }

    public function test_game_title_delete()
    {
        $title = Title::make([
            'title' => 'Test game title',
            'type' => 'juego'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    public function test_free_time_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Test free time title 1',
            'type' => 'tiempo libre'
        ]);

        $title2 = Title::make([
            'title' => 'Test free time title 2',
            'type' => 'tiempo libre'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_free_time_title_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicAdvanced/store', [
            'title' => 'Test free time title',
            'type' => 'tiempo libre'
        ])->assertRedirect('/advancedTitle');

    }

    public function test_free_time_title_delete()
    {
        $title = Title::make([
            'title' => 'Test free time title',
            'type' => 'tiempo libre'
        ]);

        if ($title) {
            $title->delete();
        }

        $this->assertNull($title->fresh());;
    }

    // Type error 302
    // public function test_store()
    // {
    //     $response = $this->post('/admin', [
    //         'event_name' => 'Php',
    //         'event_date' => '10/10/2023',
    //         'event_description' => 'Hello PHP!!',
    //         'event_img' => 'https://unsplash.com/images/stock/high-resolution',
    //         'event_capacity' => '12',
    //     ]);

    //     $response->assertStatus(200);
    // }
}

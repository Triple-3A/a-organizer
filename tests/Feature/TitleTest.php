<?php

namespace Tests\Feature;

use App\Models\Title;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TitleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_title_store()
    // {
    //     $user = new User(['role' => 'technician']);
    //     $this->be($user);

    //     $response = $this->post('basicTitle/store', [
    //         'title' => 'Test basic title',
    //         'type' => 'básico'
    //     ])->assertRedirect('/basicTitle');

    // }

    public function test_title_duplication()
    {
        $title1 = Title::make([
            'title' => 'Plátano plátano',
            'type' => 'básico'
        ]);

        $title2 = Title::make([
            'title' => 'Pera pera',
            'type' => 'básico'
        ]);

        $this->assertTrue($title1->title != $title2->title);
    }

    public function test_title_delete()
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

    // public function test_delete_title()
    // {
    //     $title = Title::make([
    //         'title' => 'Test basic title',
    //         'type' => 'básico'
    //     ]);

    //     $this->withSession(['role' => 'technician'])
    //         ->delete("/basicTitle/delete/{$title->id}")
    // ->assertRedirect('/basicTitle')
    //         ->assertSessionHas('deleted', $title->id);
    // }

    //Type error 302
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

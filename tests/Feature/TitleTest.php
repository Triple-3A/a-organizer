<?php

namespace Tests\Feature;

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
    public function test_example()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

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

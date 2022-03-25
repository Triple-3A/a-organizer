<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->get('/login');

        $response->assertSuccessful()
            ->assertStatus(200);
    }

    public function test_register()
    {
        $response = $this->get('/register');

        $response->assertSuccessful()
            ->assertStatus(200);

    }
}

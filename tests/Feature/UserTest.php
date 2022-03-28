<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user_register()
    {

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/');
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'jhondoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Daisy Gill',
            'email' => 'daisygill@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    // public function test_user_delete()
    // {
    //     $user = User::make([
    //         'name' => 'John Doe',
    //         'email' => 'jhondoe@gmail.com'
    //     ]);

    //     if ($user) {
    //         $user->delete();
    //         if ($user) {
    //             $response = false;
    //         } else {
    //             $response = true;
    //         }
    //     }

    //     $this->assertTrue($response);
    // }
}

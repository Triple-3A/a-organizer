<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Fortify\Features;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_registration_screen_can_be_rendered()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test_user_create_register()
    {

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'role' => 'admin',
        ]);

        $response->assertRedirect('/dashboard');
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

    public function test_user_delete()
    {
        $user = User::make([
            'name' => 'John Doe',
            'email' => 'jhondoe@gmail.com'
        ]);

        if ($user) {
            $user->delete();
        }

        $this->assertNull($user->fresh());;
    }
}

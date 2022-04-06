<?php

namespace Tests\Feature;

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

    public function test_standBy()
    {
        $response = $this->withSession(['role' => 'standBy'])
                         ->get('/standBy')
                         ->assertStatus(302);

    }

    public function test_admin_index()
    {
        $response = $this->withSession(['role' => 'admin'])
                         ->get('/admin')
                         ->assertStatus(302);

    }

    public function test_admin_reassign_role()
    {
        $response = $this->withSession(['role' => 'admin'])
                         ->post('/reassignRole')
                         ->assertStatus(302);

    }

    public function test_admin_assignment()
    {
        $response = $this->withSession(['role' => 'admin'])
                         ->get('/assignment')
                         ->assertStatus(302);

    }

    public function test_admin_assignTechToStudent()
    {
        $response = $this->withSession(['role' => 'admin'])
                         ->post('/assignTechToStudent')
                         ->assertStatus(302);

    }

    public function test_admin_assigned()
    {
        $response = $this->withSession(['role' => 'admin'])
                         ->get('/assigned')
                         ->assertStatus(302);

    }


    public function test_technician_index()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/technician')
                         ->assertStatus(302);

    }

    public function test_technician_categories()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/categories')
                         ->assertStatus(302);

    }

    public function test_technician_users()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/technicianUsers')
                         ->assertStatus(302);

    }

    public function test_technician_basic_title()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/basicTitle')
                         ->assertStatus(302);

    }

    public function test_technician_basic_create()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/basicTitle/create')
                         ->assertStatus(302);

    }

    public function test_technician_basic_store()
    {
        $this->withSession(['role' => 'technician'])
                         ->post('basicTitle/store',  [
                            'title' => 'Instrumental',
                            'type' => 'instrumental',
                        ])->assertStatus(302);

    }

    public function test_technician_basic_delete()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->delete('/basicTitle/delete')
                         ->assertStatus(302);

    }

    public function test_technician_instrumental_title()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/instrumentalTitle')
                         ->assertStatus(302);

    }

    public function test_technician_instrumental_create()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/instrumentalTitle/create')
                         ->assertStatus(302);

    }

    public function test_technician_instrumental_store()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->delete('/instrumentalTitle/store')
                         ->assertStatus(302);

    }

    public function test_technician_instrumental_delete()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->delete('/instrumentalTitle/delete')
                         ->assertStatus(302);

    }

    public function test_technician_advanced_title()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/advancedTitle')
                         ->assertStatus(302);

    }

    public function test_technician_advanced_create()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/advancedTitle/create')
                         ->assertStatus(302);

    }

    public function test_technician_advanced_store()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->delete('/advancedTitle/store')
                         ->assertStatus(302);

    }

    public function test_technician_advanced_delete()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->delete('/advancedTitle/delete')
                         ->assertStatus(302);

    }

    public function test_technician_users_profile()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/technicianUsersProfile/1')
                         ->assertStatus(302);

    }

    public function test_technician_user_basic()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/techUserBasic/1')
                         ->assertStatus(302);

    }

    public function test_technician_user_instrumental()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/techUserInstrumental/1')
                         ->assertStatus(302);

    }

    public function test_technician_user_advanced()
    {
        $response = $this->withSession(['role' => 'technician'])
                         ->get('/techUserAdvanced/1')
                         ->assertStatus(302);

    }
}

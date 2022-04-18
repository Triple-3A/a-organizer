<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;
    
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
        $this->withSession(['role' => 'standBy'])
            ->get('/standBy')
            ->assertStatus(302);
    }

    public function test_admin_index()
    {
        $this->withSession(['role' => 'admin'])
            ->get('/admin')
            ->assertStatus(302);
    }

    public function test_admin_reassign_role()
    {
        $this->withSession(['role' => 'admin'])
            ->post('/reassignRole')
            ->assertStatus(302);
    }

    public function test_admin_assignment()
    {
        $this->withSession(['role' => 'admin'])
            ->get('/assignment')
            ->assertStatus(302);
    }

    public function test_admin_assignTechToStudent()
    {
        $this->withSession(['role' => 'admin'])
            ->post('/assignTechToStudent')
            ->assertStatus(302);
    }

    public function test_admin_assigned()
    {
        $this->withSession(['role' => 'admin'])
            ->get('/assigned')
            ->assertStatus(302);
    }


    public function test_technician_index()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/technician')
            ->assertStatus(302);
    }

    public function test_technician_categories()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/categories')
            ->assertStatus(302);
    }

    public function test_technician_users()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/technicianUsers')
            ->assertStatus(302);
    }

    public function test_technician_basic_title()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/basicTitle')
            ->assertStatus(302);
    }

    public function test_technician_basic_title_create()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/basicTitle/create')
            ->assertStatus(302);
    }

    public function test_technician_basic_title_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('basicTitle/store')
            ->assertStatus(302);
    }

    public function test_technician_basic_title_delete()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/basicTitle/delete')
            ->assertStatus(302);
    }

    public function test_technician_instrumental_title()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/instrumentalTitle')
            ->assertStatus(302);
    }

    public function test_technician_instrumental_title_create()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/instrumentalTitle/create')
            ->assertStatus(302);
    }

    public function test_technician_instrumental_title_store()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/instrumentalTitle/store')
            ->assertStatus(302);
    }

    public function test_technician_instrumental_title_delete()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/instrumentalTitle/delete')
            ->assertStatus(302);
    }

    public function test_technician_advanced_title()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/advancedTitle')
            ->assertStatus(302);
    }

    public function test_technician_advanced_title_create()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/advancedTitle/create')
            ->assertStatus(302);
    }

    public function test_technician_advanced_title_store()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/advancedTitle/store')
            ->assertStatus(302);
    }

    public function test_technician_advanced_title_delete()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/advancedTitle/delete')
            ->assertStatus(302);
    }

    public function test_technician_users_profile()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/technicianUsersProfile/1')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_task_index()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/techUserBasic/1')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_task_create()
    {
        $this->withSession(['role' => 'technician'])
            ->get('techUserBasic/1/create')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_task_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserBasic/store')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_task_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserBasic/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_description_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserBasicDescription/store')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_description_edit()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserBasicDescription/edit')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_description_update()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserBasicDescription/update')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_description_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserBasicDescription/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_basic_description_create()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserBasicDescription/1/create')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_task_index()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/techUserInstrumental/1')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_task_create()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/techUserInstrumental/1/create')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_task_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserInstrumental/store')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_task_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserInstrumental/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_description_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserInstrumentalDescription/store')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_description_edit()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserInstrumentalDescription/edit')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_description_update()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserInstrumentalDescription/update')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_description_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserInstrumentalDescription/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_instrumental_description_create()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserInstrumentalDescription/create/1')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_task_index()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/techUserAdvanced/1')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_task_pick()
    {
        $this->withSession(['role' => 'technician'])
            ->get('/techUserAdvanced/pick/1')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_task_create()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserAdvanced/create')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_task_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserAdvanced/store')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_task_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserAdvanced/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_store()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserAdvancedDescription/store')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_edit()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserAdvancedDescription/edit')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_update()
    {
        $this->withSession(['role' => 'technician'])
            ->post('/techUserAdvancedDescription/update')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_destroy()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserAdvancedDescription/delete')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_pick()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserAdvanced/1/pick')
            ->assertStatus(302);
    }

    public function test_technician_user_advanced_description_create()
    {
        $this->withSession(['role' => 'technician'])
            ->delete('/techUserAdvancedDescription/create')
            ->assertStatus(302);
    }

    public function test_technician_student()
    {
        $this->withSession(['role' => 'student'])
            ->get('/student')
            ->assertStatus(302);
    }

    public function test_technician_student_nickname()
    {
        $this->withSession(['role' => 'student'])
            ->post('/assignStudentNickname')
            ->assertStatus(302);
    }

    public function test_technician_student_tasks()
    {
        $this->withSession(['role' => 'student'])
            ->get('/studentTasks')
            ->assertStatus(302);
    }
}

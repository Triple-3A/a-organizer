<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_task_duplication()
    {
        $task1 = Task::make([
            'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:50',
            'done' => 'no',
        ]);

        $task2 = Task::make([
            'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:55',
            'done' => 'no',
        ]);

        $this->assertTrue($task1->time != $task2->time);
    }

    public function test_task_delete()
    {
        $task = Task::make([
            'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:55',
            'done' => 'no',
        ]);

        if ($task) {
            $task->delete();
        }

        $this->assertNull($task->fresh());;
    }

    public function test_delete_task()
    {
        $task = Task::make([
            'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:55',
            'done' => 'no',
     ]);

        $this->withSession(['role' => 'technician'])
            ->delete("/basicTitle/delete/{$task->id}")
    ->assertRedirect('/basicTitle')
            ->assertSessionHas('deleted', $task->id);
    }

    public function test_task_store()
    {
        $user = new User(['role' => 'technician']);
        $this->be($user);

        $response = $this->post('basicDescription/store', [
           'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:55',
            'done' => 'no',
        ])->assertRedirect('/basicTitle');

    }

    // Type error 302
    public function test_store_description()
    {
        $response = $this->post('/admin', [
            'repeatable' => 'no',
            'date' => '10/05/2002',
            'time' => '12:55',
            'done' => 'no',
        ]);

        $response->assertStatus(200);
    }
}

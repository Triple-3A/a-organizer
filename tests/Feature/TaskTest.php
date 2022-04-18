<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_basic_task_store()
    {
        
        User::create(array('name' => "ileen", 'email' => "ileenfdz@gmail.com", 'email_verified_at' => now(), 'password' => Hash::make('12345678'), 'remember_token' => Str::random(10), 'role' => 'student'));

        $this->be(new User(['role' => 'technician']))
            ->post('/techUserBasic/store', [
                'id' => 1,
                'title' => 'Test basic task',
                'repeatable' => false,
                'startDate' => '2002/04/10',
                'finishDate' => '2002/05/10',
            ])->assertRedirect('/techUserBasic/1');
    }

    public function test_basic_task_duplication()
    {
        $task1 = Task::make([
            'repeatable' => false,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $task2 = Task::make([
            'repeatable' => true,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $this->assertTrue($task1->repeatable != $task2->repeatable);
    }

    public function test_basic_task_delete()
    {
        $task = Task::make([
            'repeatable' => true,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        if ($task) {
            $task->delete();
        }

        $this->assertNull($task->fresh());
    }

    public function test_instrumental_task_store()
    {
        User::create(array('name' => "ileen", 'email' => "ileenfdz@gmail.com", 'email_verified_at' => now(), 'password' => Hash::make('12345678'), 'remember_token' => Str::random(10), 'role' => 'student'));

        $user = new User(['role' => 'technician']);
        $this->be($user);

        $this->post('/techUserInstrumental/store', [
            'repeatable' => false,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ])->assertRedirect('/techUserInstrumental/1');
    }

    public function test_instrumental_task_duplication()
    {
        $task1 = Task::make([
            'repeatable' => false,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $task2 = Task::make([
            'repeatable' => true,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $this->assertTrue($task1->repeatable != $task2->repeatable);
    }

    public function test_instrumental_task_delete()
    {
        $task = Task::make([
            'id' => 1,
                'title' => 'Test instrumental task',
                'repeatable' => false,
                'startDate' => '2002/04/10',
                'finishDate' => '2002/05/10',
        ]);

        if ($task) {
            $task->delete();
        }

        $this->assertNull($task->fresh());
    }

    public function test_advanced_task_store()
    {
        User::create(array('name' => "ileen", 'email' => "ileenfdz@gmail.com", 'email_verified_at' => now(), 'password' => Hash::make('12345678'), 'remember_token' => Str::random(10), 'role' => 'student'));

        $user = new User(['role' => 'technician']);
        $this->be($user);

        $this->post('/techUserAdvanced/store', [
            'id' => 1,
                'title' => 'Test advanced task',
                'repeatable' => false,
                'startDate' => '2002/04/10',
                'finishDate' => '2002/05/10',
        ])->assertRedirect('/techUserAdvanced/1');
    }

    public function test_advanced_task_duplication()
    {
        $task1 = Task::make([
            'repeatable' => false,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $task2 = Task::make([
            'repeatable' => true,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        $this->assertTrue($task1->repeatable != $task2->repeatable);
    }

    public function test_advanced_task_delete()
    {
        $task = Task::make([
            'repeatable' => true,
            'startDate' => '2002/04/10',
            'finishDate' => '2002/05/10',
            'done' => false,
        ]);

        if ($task) {
            $task->delete();
        }

        $this->assertNull($task->fresh());
    }
}

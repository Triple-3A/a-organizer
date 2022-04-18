<?php

namespace Tests\Feature;

use App\Models\Description;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DescriptionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_basic_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Basic description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Basic description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }

    public function test_basic_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserBasic/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Basic description test',
        ]);

        $response->assertRedirect('techUserBasic/1');
    }

    public function test_basic_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Basic description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }

    public function test_instrumental_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Instrumental description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Instrumental description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }
    
    public function test_instrumental_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserInstrumental/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Instrumental description test',
        ]);

        $response->assertRedirect('techUserInstrumental/1');
    }

    public function test_instrumental_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Instrumental description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }

    public function test_education_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Education description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Education description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }
    
    public function test_education_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserAdvanced/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Education description test',
        ]);

        $response->assertRedirect('techUserAdvanced/1');
    }

    public function test_education_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Education description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }
    
    public function test_job_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Job description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Job description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }
    
    public function test_job_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserAdvanced/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Job description test',
        ]);

        $response->assertRedirect('techUserAdvanced/1');
    }

    public function test_job_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Job description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }

    public function test_game_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Game description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Game description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }
    
    public function test_game_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserAdvanced/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Game description test',
        ]);

        $response->assertRedirect('techUserAdvanced/1');
    }

    public function test_game_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Game description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }

    public function test_free_time_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Free time description test 1',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Free time description test 2',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }
    
    public function test_free_time_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserAdvanced/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Free time description test',
        ]);

        $response->assertRedirect('techUserAdvanced/1');
    }

    public function test_free_time_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Free time description test',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }
}

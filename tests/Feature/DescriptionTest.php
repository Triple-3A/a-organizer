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
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_description_duplication()
    {
        $description1 = Description::make([
            'id' => 2,
            'description' => 'Plátano plátano',
        ]);

        $description2 = Description::make([
            'id' => 3,
            'description' => 'Pera pera',
        ]);

        $this->withoutExceptionHandling()->assertTrue($description1->description != $description2->description);
    }

    public function test_description_delete()
    {
        $description = Description::make([
            'id' => 4,
            'description' => 'Test basic title',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->withoutExceptionHandling()->assertNull($description->fresh());
    }

    public function test_description_store()
    {
        $task = Task::create();
        $response = $this->post('techUserBasic/storeDescription', [
            'id' => 1,
            'task' => $task,
            'description' => 'Test basic title',
        ]);

        $response->assertRedirect('techUserBasic/1');
    }
}

<?php

namespace Tests\Feature;

use App\Models\Description;
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

    public function test_description_duplication()
    {
        $description1 = Description::make([
            'description' => 'Plátano plátano',
        ]);

        $description2 = Description::make([
            'description' => 'Pera pera',
        ]);

        $this->assertTrue($description1->description != $description2->description);
    }

    public function test_description_delete()
    {
        $description = Description::make([
            'description' => 'Test basic title',
        ]);

        if ($description) {
            $description->delete();
        }

        $this->assertNull($description->fresh());;
    }

    public function test_delete_description()
    {
        $description = Description::make([
            'description' => 'Test basic title',
        ]);

        $this->withSession(['role' => 'technician'])
            ->delete("/basicTitle/delete/{$description->id}")
    ->assertRedirect('/basicTitle')
            ->assertSessionHas('deleted', $description->id);
    }

    public function test_description_store()
    {
        $user = new User(['role' => 'technician']);

        $this->be($user);
    
        $response = $this->post('basicDescription/store', [
            'description' => 'Test basic title',
        ])->assertRedirect('/basicTitle');

    }

    // Type error 302
    public function test_store_description()
    {
        $response = $this->post('/admin', [
            'description' => 'Test basic description',
        ]);

        $response->assertStatus(200);
    }
}

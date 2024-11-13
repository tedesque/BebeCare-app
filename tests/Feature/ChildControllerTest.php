<?php

namespace Tests\Feature;

use App\Models\Child;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class ChildControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_child(): void
    {
        $response = $this->post('/children', [
            'name' => 'Almira Kulas',
            'birth_date' => '2024-11-11',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('children', [
            'name' => 'Almira Kulas',
            'birth_date' => '2024-11-11',
        ]);
    }

    public function test_it_can_view_the_child(): void
    {
        $child = Child::factory()->create();

        $response = $this->get('/children');

        $response->assertStatus(200);
        $response->assertJson([
            'name' => $child->name,
            'birth_date' => $child->birth_date,
        ]);
    }

    public function test_it_can_update_the_child(): void
    {
        $child = Child::factory()->create();

        $response = $this->put('/children', [
            'name' => 'Laura',
            'birth_date' => '2024-07-23',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('children', [
            'name' => 'Laura',
            'birth_date' => '2024-07-23',
        ]);
    }
}

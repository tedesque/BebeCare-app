<?php

namespace Tests\Feature;

use App\Models\Guardian;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuardianControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_parent(): void
    {
        $response = $this->post('/guardian', [
            'name' => 'Fernanda Viana Goulart',
            'birth_date' => '1987-01-30',
            'phone_number' => '22992768531'
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('guardian', [
            'name' => 'Fernanda Viana Goulart',
            'birth_date' => '1987-01-30',
            'phone_number' => '22992768531'
        ]);
    }

    public function test_it_can_get_a_parent(): void
    {
        $guardian = Guardian::factory()->create();

        $response = $this->get('/guardian');
        $response->assertStatus(200);
        $response->assertJson([
            'name' => $guardian->name,
            'birth_date' => $guardian->birth_date,
            'phone_number' => $guardian->phone_number,
        ]);
    }

    public function test_it_can_update_a_parent()
    {
        $guardian = Guardian::factory()->create();

        $response = $this->put('/guardian', [
            'name' => 'Fernanda Viana Goulart',
            'birth_date' => '1987-01-30',
            'phone_number' => '22992768531'
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('guardian', [
            'name' => 'Fernanda Viana Goulart',
            'birth_date' => '1987-01-30',
            'phone_number' => '22992768531'
        ]);
    }
}

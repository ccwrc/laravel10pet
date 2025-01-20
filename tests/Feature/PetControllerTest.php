<?php

namespace Tests\Feature;

use Tests\TestCase;

class PetControllerTest extends TestCase
{
    protected string $apiUrl;

    protected function setUp(): void
    {
        parent::setUp();
        $this->apiUrl = env('PETSTORE_API_URL', 'https://example.com');
    }

    public function test_create_displays_create_view()
    {
        $response = $this->get(route('pets.create'));

        $response->assertStatus(200);
        $response->assertViewIs('pets.create');
    }
}

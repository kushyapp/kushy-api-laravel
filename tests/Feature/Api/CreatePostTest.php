<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Tests\Traits\AttachJwtToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostTest extends TestCase
{
    use AttachJwtToken;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatingPost()
    {
        $response = $this->json('POST', 'api/v1/shops', ['name' => 'Test', 'category' => 1]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => [
                    'name' => 'Test',
                    'categories' => true
                ]
            ]);
    }
}

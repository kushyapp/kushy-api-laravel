<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Tests\Traits\AttachJwtToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShopsControllerTest extends TestCase
{
    use AttachJwtToken;

    /**
     * GET /shops/
     * Should return 201 with data array
     *
     * @return void
     */
    public function testShopsIndex()
    {
        $response = $this->json('GET', 'api/v1/shops');

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => true
            ]);
    }

    /**
     * GET /shops/
     * Should return 201 with data array
     *
     * @return void
     */
    public function testShopsShow()
    {
        $shop = factory(\KushyApi\Posts::class)->states('shops')->make();
        $response = $this->json('GET', "api/v1/shops/{$shop->id}");

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => true
            ]);
    }
}

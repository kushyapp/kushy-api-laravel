<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Tests\Traits\AttachJwtToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShopsControllerTest extends TestCase
{
    use AttachJwtToken;

    public function createShop()
    {
        return factory(\KushyApi\Posts::class)->states('shops')->create();
    }

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
        // Create a test shop with filled out fields
        $shop = $this->createShop();

        // Check the API for the new entry
        $response = $this->json('GET', "api/v1/shops/{$shop->id}");

        // Delete the test shop
        $shop->delete();

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => true
            ]);
    }

    /**
     * POST /shops/
     * Tests the store() method that creates new shop
     * 
     * API should respond 201
     * 
     *
     * @return void
     */
    public function testShopsStore()
    {
        $shop = factory(\KushyApi\Posts::class)->states('shops')->make();
        $shop = $shop->toArray();

        // Category is required (see StoreShops Request validator)
        $shop['category'] = 1;

        $response = $this->json('POST', "api/v1/shops/", $shop);
        (\KushyApi\Posts::class)::destroy($shop['id']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => [
                    'name' => $shop['name'],
                    'categories' => [
                        ['category_id' => $shop['category'] ]
                    ]
                ]
            ]);
    }

    /**
     * DELETE /shops/<id>
     * Tests the destroy() method that deletes the shop
     *
     * @return void
     */
    public function testShopsDestroy()
    {
        $shop = $this->createShop();

        $response = $this->json('DELETE', "api/v1/shops/{$shop->id}");
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'Successfully deleted the shop'
            ]);
    }
}

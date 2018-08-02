<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Tests\Traits\AttachJwtToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityControllerTest extends TestCase
{
    use AttachJwtToken;

    public function createActivity()
    {
        return factory(\KushyApi\UserActivity::class)->create();
    }

    /**
     * GET /activity/
     * Should return 201 with data array
     *
     * @return void
     */
    public function testActivityIndex()
    {
        $response = $this->json('GET', 'api/v1/activity');

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => true
            ]);
    }

    /**
     * GET /activity/<id>
     * Should return 201 with data array
     *
     * @return void
     */
    public function testActivityShow()
    {
        // Create a test shop with filled out fields
        $activity = $this->createActivity();

        // Check the API for the new entry
        $response = $this->json('GET', "api/v1/activity/{$activity->id}");

        // Delete the test shop
        $activity->delete();

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => true
            ]);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testActivityStore()
    {
        $activity = $this->createActivity();
        $activity = $activity->toArray();

        $response = $this->json('POST', "api/v1/activity/", $activity);
        (\KushyApi\UserActivity::class)::destroy($activity['id']);

        $response
            ->assertStatus(201)
            ->assertJson([
                'data' => [
                    'item_id' => $activity['item_id'],
                    'section' => $activity['section']
                ]
            ]);
    }
    
    /**
     * DELETE /activity/<id>
     * Tests the destroy() method that deletes the shop
     *
     * @return void
     */
    public function testActivityDestroy()
    {
        $activity = $this->createActivity();

        $response = $this->json('DELETE', "api/v1/activity/{$activity->id}");
        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'Successfully deleted the activity.'
            ]);
    }
}

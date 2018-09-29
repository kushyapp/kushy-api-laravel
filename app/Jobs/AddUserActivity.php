<?php

namespace KushyApi\Jobs;

use KushyApi\UserActivity;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddUserActivity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user_id;
    private $section;
    private $item_id;
    private $post_id;
    
    /**
     * Create a new job instance.
     *
     * @param integer   $user_id
     * @param string    $section - Type of activity (bookmark, review, etc)
     * @param integer   $item_id
     * 
     * @return void
     */
    public function __construct($user_id, $section, $item_id, $post_id)
    {
        $this->user_id = $user_id;
        $this->section = $section;
        $this->item_id = $item_id;
        $this->post_id = $post_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /** Add new activity via the model */
        $newActivity = UserActivity::create([
            'user_id' => $this->user_id,
            'section' => $this->section,
            'item_id' => $this->item_id,
            'post_id' => $this->post_id,
        ]);

        return $newActivity;

    }
}

<?php

namespace KushyApi\Jobs;

use KushyApi\PostsCategories;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreatePostCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $categoryId;
    private $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($categoryId, $id)
    {
        $this->categoryId = $categoryId;
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Check for existing categories
        $categoryCheck = PostsCategories::where('category_id', $this->categoryId)
                                                ->where('post_id', $this->id)
                                                ->first();
        if(!$categoryCheck) {
            PostsCategories::create([
                'category_id' => $this->categoryId,
                'post_id' => $this->id,
            ]);
        } 
    }
}

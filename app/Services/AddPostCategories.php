<?php

namespace KushyApi\Services;

use KushyApi\PostsCategories;

class AddPostCategories
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($categories, $postId)
    {

        /**
         * If it's not an array, it's probably a comma separated string
         * Explode it so we can work with an array
         */
        if(!is_array($categories))
        {            
            $categories = explode(',', $categories);
        }

        foreach($categories as $category) {
            if($category != '') {
                // Find the first one, or create new
                $checkCategory = PostsCategories::firstOrCreate([
                    'category_id' => $category,
                    'post_id' => $postId,
                ]);
            }
        }

    }
}

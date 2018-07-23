<?php

namespace KushyApi\Services;

use KushyApi\PostsMeta;

class AddPostMeta
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($post_id, $meta_name, $meta_value)
    {

        // Check if it exists
        $check = PostsMeta::where('post_id', $post_id)
                        ->where('meta_name', $meta_name)
                        ->where('meta_value', $meta_value)
                        ->first();
        
        if(!$check) {
            $newMeta = PostsMeta::create([
                'post_id'       => $post_id,
                'meta_name'     => $meta_name,
                'meta_value'    => $meta_value,
            ]);
        }

    }
}

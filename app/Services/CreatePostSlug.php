<?php

namespace KushyApi\Services;

use KushyApi\Posts;

class CreatePostSlug
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($slug)
    {
        $cleanSlug = str_slug($slug);
        $finalSlug = $cleanSlug;

        /** Check for dupe slugs */
        $next = 2;
        // Loop until we can query for the slug and it returns false
        while (Posts::where('slug', '=', $finalSlug)->first()) {
            $finalSlug = $cleanSlug . '-' . $next;
            $next++;
        }

        return $finalSlug;
    }
}

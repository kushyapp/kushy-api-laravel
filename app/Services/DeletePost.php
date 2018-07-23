<?php

namespace KushyApi\Services;

use KushyApi\Posts;
use KushyApi\PostsCategories;
use KushyApi\Reviews;
use KushyApi\UserActivity;
use KushyApi\User;

class DeletePost
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function delete($id, $section)
    {

        // Grab model dynamically
        if($section == 'users') { 
            $model = new \Kushy\User;
        } else {
            $model = new Posts;
        }

        $delete = $model::destroy($id);


        /**
         * Change status of all associated user activity to false
         */
        $disableActivity = UserActivity::where('item_id', $id)->get();
        foreach($disableActivity as $activity)
        {
            $activity->delete();
        }

        /**
         * Change status of all associated user reviews to false
         */
        $disableReview = Reviews::where('post_id', $id)->get();
        foreach($disableReview as $review)
        {
            $review->delete();
        }


        /**
         * Delete all post categories
         */
        $deleteCategories = PostsCategories::where('post_id', $id)->get();
        foreach($deleteCategories as $category)
        {
            $category->delete();
        }

        flash('Successfully deleted')->success();
    }
}

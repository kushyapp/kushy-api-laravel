<?php

namespace KushyApi\Services;

use KushyApi\Reviews;
use KushyApi\Services\AddStrainReviewMeta;
use KushyApi\Services\AddUserActivity;
use Auth;

class AddReview
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create(
        $item_id, 
        $section, 
        $rating, 
        $review, 
        $meta = null
    )
    {

        $AddStrainReviewMeta = new AddStrainReviewMeta;
        $AddUserActivity = new AddUserActivity;

        $newReview = [];
        $newReview['post_id'] = $item_id;
        $newReview['user_id'] = Auth::user()->id;
        $newReview['rating'] = $rating;
        $newReview['review'] = $review;

        $newReview = Reviews::create($newReview);

        if($newReview && $section == 'strains') {

            $AddStrainReviewMeta->create(
                $newReview, 
                $meta['effects'], 
                $meta['flavors'], 
                $meta['medical']
            );
        }

        if($newReview) {
            flash("Your review has been posted! <a href='/dashboard/reviews/'>Click here</a> to see all your reviews.")->success();

            $AddUserActivity->create(Auth::user()->id, 'reviews', $newReview->id);
        } else {
            flash("Sorry, that didn't quite work. Please try again.")->error();
        }

        return $newReview;
    }
}

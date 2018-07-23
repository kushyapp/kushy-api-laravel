<?php

namespace KushyApi\Jobs;

use KushyApi\Reviews;
use KushyApi\Jobs\AddStrainReviewMeta;
use KushyApi\Jobs\AddUserActivity;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddReview implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Review form request variables
     *
     * @var $item_id
     * @var $section
     * @var $rating
     * @var $review
     */
    private $item_id;
    private $section;
    private $rating;
    private $review;
    private $effects;
    private $flavors;
    private $medical;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($item_id, $section, $rating, $review, $meta = null)
    {
        $this->item_id = $item_id;
        $this->section = $section;
        $this->rating = $rating;
        $this->review = $review;
        if($meta != null) {
            $this->effects = $meta['effects'];
            $this->flavors = $meta['flavors'];
            $this->medical = $meta['medical'];
        }
    }

    /**
     * Creates a new review, flashes status message, and returns the review ID
     *
     * @return int $id
     */
    public function handle()
    {
        $newReview = [];
        $newReview['post_id'] = $this->item_id;
        $newReview['user_id'] = Auth::user()->id;
        $newReview['rating'] = $this->rating;
        $newReview['review'] = $this->review;

        $newReview = Reviews::create($newReview);

        if($newReview && $this->section == 'strains') {

            
            AddStrainReviewMeta::dispatch(
                $newReview, 
                $this->effects, 
                $this->flavors, 
                $this->medical
            );
        }

        if($newReview) {
            flash("Your review has been posted! <a href='/dashboard/reviews/'>Click here</a> to see all your reviews.")->success();

            AddUserActivity::dispatch(Auth::user()->id, 'reviews', $newReview->id);
        } else {
            flash("Sorry, that didn't quite work. Please try again.")->error();
        }

        return $newReview;
    }

    /**
     * The job failed to process.
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $exception)
    {
        Log::error($exception);
        Log::critical($exception);
        flash("Sorry, that didn't quite work as expected. Please try again.")->error();
    }
}

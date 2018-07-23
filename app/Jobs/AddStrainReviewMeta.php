<?php

namespace KushyApi\Jobs;

use KushyApi\ReviewsStrains;
use KushyApi\StrainsTaxonomies;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddStrainReviewMeta implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Strain review meta input arrays
     *
     * @var model $review
     * @var array $effects
     * @var array $flavors
     * @var array $medical
     */
    private $review;
    private $effects;
    private $flavors;
    private $medical;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($review, $effects, $flavors, $medical)
    {
        $this->review = $review;
        $this->effects = $effects;
        $this->flavors = $flavors;
        $this->medical = $medical;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $effects = explode(',', $this->effects);
        foreach($effects as $effect) {
            if($effect != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'effects', 
                    'meta_value' => $effect
                ]);
            }
        }

        $flavors = explode(',', $this->flavors);
        foreach($flavors as $flavor) {
            if($flavor != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'flavors', 
                    'meta_value' => $flavor
                ]);
            }
        }

        $medicals = explode(',', $this->medical);
        foreach($medicals as $medical) {
            if($medical != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'ailment', 
                    'meta_value' => $medical
                ]);
            }
        }

        $this->review->strainMeta()->saveMany($strainMeta);
    }
}

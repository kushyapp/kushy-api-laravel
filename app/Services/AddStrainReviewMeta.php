<?php

namespace KushyApi\Services;

use KushyApi\ReviewsStrains;
use KushyApi\StrainsTaxonomies;

class AddStrainReviewMeta
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($review, $effects, $flavors, $medical)
    {
        $effects = explode(',', $effects);
        foreach($effects as $effect) {
            if($effect != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'effects', 
                    'meta_value' => $effect
                ]);
            }
        }

        $flavors = explode(',', $flavors);
        foreach($flavors as $flavor) {
            if($flavor != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'flavors', 
                    'meta_value' => $flavor
                ]);
            }
        }

        $medicals = explode(',', $medical);
        foreach($medicals as $medical) {
            if($medical != '') {
                $strainMeta[] = new \Kushy\ReviewsStrains([
                    'meta_key' => 'ailment', 
                    'meta_value' => $medical
                ]);
            }
        }

        $review->strainMeta()->saveMany($strainMeta);
    }
}

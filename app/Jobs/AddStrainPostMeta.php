<?php

namespace KushyApi\Jobs;

use KushyApi\PostsMeta;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddStrainPostMeta implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Strain review meta input arrays
     *
     * @var id      $review
     * @var array   $effects
     * @var array   $flavors
     * @var array   $medical
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
                // Check if it exists
                $check = PostsMeta::where('post_id', $this->review)
                                ->where('meta_name', 'effects')
                                ->where('meta_value', $effect)
                                ->first();
                
                if(!$check) {
                    $newMeta = PostsMeta::create([
                        'post_id'       => $this->review,
                        'meta_name'     => 'effects',
                        'meta_value'    => $effect,
                    ]);
                }
            }
        }

        $flavors = explode(',', $this->flavors);
        foreach($flavors as $flavor) {
            if($flavor != '') {
                // Check if it exists
                $check = PostsMeta::where('post_id', $this->review)
                                ->where('meta_name', 'flavors')
                                ->where('meta_value', $flavor)
                                ->first();
                
                if(!$check) {
                    $newMeta = PostsMeta::create([
                        'post_id'       => $this->review,
                        'meta_name'     => 'flavors',
                        'meta_value'    => $flavor,
                    ]);
                }
            }
        }

        $ailments = explode(',', $this->medical);
        foreach($ailments as $ailment) {
            if($ailment != '') {
                // Check if it exists
                $check = PostsMeta::where('post_id', $this->review)
                                ->where('meta_name', 'ailments')
                                ->where('meta_value', $ailment)
                                ->first();
                
                if(!$check) {
                    $newMeta = PostsMeta::create([
                        'post_id'       => $this->review,
                        'meta_name'     => 'ailments',
                        'meta_value'    => $ailment,
                    ]);
                }
            }
        }


    }
}

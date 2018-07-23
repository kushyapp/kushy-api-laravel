<?php

namespace KushyApi\Services;

use KushyApi\PostsMeta;

class AddHoursPostMeta
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($request, $postId)
    {

        $validateHours = $request->validate([
                'hours.*.*'          => 'nullable|string|max:4',
            ]);

            /** 
             * Update shop hours using post meta relationship 
             * Loop through selection and use `firstOrCreate`
             * on post meta model to ensure no dupes elegantly
             * */
            foreach($validateHours as $days)
            {
                foreach($days as $day => $hours)
                {
                    foreach($hours as $status => $time)
                    {
                        if($time)
                            {
                            $newMeta = PostsMeta::firstOrCreate(
                                [
                                    'meta_name' => $day . '_' . $status,
                                    'post_id' => $postId
                                ],
                                ['meta_value' => $time]
                            );
                            
                            /**
                             * If we queried the meta and it's different than selection
                             * update the model with new data
                             */
                            if($newMeta)
                            {
                                if($newMeta->meta_value != $time)
                                {
                                    $newMeta->meta_value = $time;
                                    $newMeta->save();
                                }
                            }
                        }
                    }
                   
                }
            }

    }
}

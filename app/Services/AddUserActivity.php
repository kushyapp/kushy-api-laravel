<?php

namespace KushyApi\Services;

use KushyApi\UserActivity;

class AddUserActivity
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function create($user_id, $section, $item_id)
    {

        $newActivity = UserActivity::create([
            'user_id' => $user_id,
            'section' => $section,
            'item_id' => $item_id,
        ]);

        return $newActivity;

    }
}

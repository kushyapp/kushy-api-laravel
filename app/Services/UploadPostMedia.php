<?php

namespace KushyApi\Services;

use Storage;

class UploadPostMedia
{

    /**
     * Execute the job.
     *
     * @return void
     */
    public function upload($request, $post, $section)
    {
        // Handle the Featured Image
        if($request->file('newFeatured')) {
            // Check for existing featured_img and queue for deletion
            if(!empty($post->featured_img)) {
                Storage::disk('s3')->delete($post->featured_img);
            }
            $storageId = Storage::disk('s3')->put("uploads/$section/featured/", $request->file('newFeatured'), 'public');
            $post->featured_img = $storageId;
        }
        // Handle the Avatar
        if($request->file('newAvatar')) {
            // Check for existing avatar and queue for deletion
            if(!empty($post->avatar)) {
                Storage::disk('s3')->delete($post->avatar);
            }
            $storageId = Storage::disk('s3')->put("uploads/$section/avatars/", $request->file('newAvatar'), 'public');
            $post->avatar = $storageId;
        }
        $post->save();
    }
}

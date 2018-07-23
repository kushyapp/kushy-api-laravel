<?php

namespace KushyApi\Jobs;

use KushyApi\Bookmarks;
use KushyApi\Jobs\AddUserActivity;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddBookmark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Bookmark form request variables
     *
     * @var $item_id - the post ID we're bookmarking
     * @var $user_id - the ID of the user bookmarking
     */
    private $item_id;
    private $user_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($item_id, $user_id)
    {
        $this->item_id = $item_id;
        $this->user_id = $user_id;
    }

    /**
     * Creates a new bookmark, creates new user activity, 
     * flashes status message, and returns the bookmark ID
     *
     * @return int $id
     */
    public function handle()
    {
        
        $newBookmark = [];
        $newBookmark['post_id'] = $this->item_id;
        $newBookmark['user_id'] = $this->user_id;

        $bookmarkCheck = Bookmarks::where([
            'post_id' => $this->item_id,
            'user_id' => $this->user_id
        ])->first();

        if(!$bookmarkCheck) {
            $id = Bookmarks::create($newBookmark);
        
            if($id) {
                flash("Added the bookmark to your collection! <a href='/dashboard/bookmarks/'>Click here</a> to see all your bookmarks.")->success();

                AddUserActivity::dispatch($this->user_id, 'bookmarks', $id->id);

                return $id;
            } else {
                return flash("Sorry, that didn't quite work. Please try again.")->error();
            }
        } else {
            return flash("That bookmark already exists. <a href='/dashboard/bookmarks/'>Click here</a> to see all your bookmarks.")->error();
        }

    }
}

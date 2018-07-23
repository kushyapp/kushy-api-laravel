<?php

namespace KushyApi\Jobs;

use KushyApi\Posts;
use KushyApi\User;
use KushyApi\Mail\NewStaffMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class EmailNewStaff implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Employee information
     *
     * @var eloquent    $user
     * @var id          $businessId
     * @var string      $password
     * @var string      $invite
     */
    private $user;
    private $businessId;
    private $password;
    private $invite;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $businessId, $password = null, $invite = null)
    {
        $this->user = $user; 
        $this->password = $password; 
        $this->invite = $invite; 
        $this->businessId = $businessId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        /**
         * Get business info
         */

        $business = Posts::find($this->businessId);
        if($business)
        {
            // Send email
            Mail::to($this->user->email)
                ->send(
                    new NewStaffMail(
                        $this->user,
                        $this->password,
                        $this->invite,
                        $business
                        )
                );
        }
    }
}

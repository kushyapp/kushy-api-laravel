<?php

namespace KushyApi\Mail;

use KushyApi\User;
use KushyApi\Posts;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewStaffMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $password = null, $invite = null, Posts $business)
    {
        $this->user = $user; 
        $this->password = $password; 
        $this->invite = $invite; 
        $this->business = $business;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@kushy.net')
                    ->subject("You've been promoted by your boss 💯💻")
                    ->view('emails.business.staffinvite')
                    ->with([ 
                        'user' => $this->user,
                        'password' => $this->password,
                        'invite' => $this->invite,
                        'businessName' => $this->business->name,
                        'section' => $this->business->section,
                        'businessSlug' => $this->business->slug,
                    ]);
    }
}

<?php

namespace KushyApi\Mail;

use KushyApi\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * User profile eloquent collection
     *
     * @var eloquent
     */
    protected $user;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@kushy.net')
                    ->subject("Welcome to Kushy")
                    ->view('emails.users.newuser')
                    ->with([ 'user' => $this->user ]);
    }
}

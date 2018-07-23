<?php

namespace KushyApi\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KushyClaimedListing extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($business, $name, $email, $claimId)
    {
        $this->business = $business;
        $this->name = $name;
        $this->email = $email;
        $this->claimId = $claimId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = array(
            'business' => $this->business,
            'name' => $this->name,
            'email' => $this->email,
            'claimId' => $this->claimId,
        );

        return $this->subject("Claimed Listing: ". $this->business)
                    ->view('emails.kushy.claimedlisting')
                    ->with($email);
    }
}

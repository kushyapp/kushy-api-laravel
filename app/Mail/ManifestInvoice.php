<?php

namespace KushyApi\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use KushyApi\ShippingManifesto;

class ManifestInvoice extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ShippingManifesto $manifesto)
    {
        $this->manifesto = $manifesto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.manifest.invoice')
                    ->subject("Your shipping manifesto is complete, here's your invoice")
                    ->with([
                        'manifesto' => $this->manifesto
                    ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuccesRegister extends Mailable
{
    use Queueable, SerializesModels;

    private $getDokter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($getDokter)
    {
        $this->getDokter = $getDokter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.successregister',[
            'getDokter' => $this->getDokter,
        ]);
    }
}

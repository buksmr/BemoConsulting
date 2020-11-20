<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $ticket;
    public $type;
    public $description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket, $type, $description)
    {
        $this->ticket = $ticket;
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('ccare@npfmicrofinancebank.com')->view('client_mail');
    }
}

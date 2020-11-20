<?php


namespace App\Mail;


use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;


class DistributionEmail extends Mailable

{

    use Queueable, SerializesModels;


    public $ticket;
    public $type;
    public $description;
    public $staffname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket, $staffname, $type, $description)
    {
        $this->ticket = $ticket;
        $this->type = $type;
        $this->description = $description;
         $this->staffname = $staffname;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('ccare@npfmicrofinancebank.com')->view('support_staff');
    }

}
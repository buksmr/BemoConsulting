<?php


namespace App\Mail;


use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Contracts\Queue\ShouldQueue;


class contactStaff extends Mailable

{

    use Queueable, SerializesModels;


    public $contactname;
    public $contactmessage;
    public $contactEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactname, $contactmessage, $contactEmail)
    {
        $this->contactname = $contactname;
        $this->contactmessage = $contactmessage;
        $this->contactEmail = $contactEmail;
        


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->from('buksmr@gmail.com')->view('contactStaff');
    }

}
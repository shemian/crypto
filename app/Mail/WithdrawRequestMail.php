<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawRequestMail extends Mailable
{
    use Queueable, SerializesModels;


    public $withdraw_details;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     * 
     */
    public function __construct($withdraw_details)
    {

        $this->withdraw_details = $withdraw_details;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Message')->view('emails.withdrawrequestmail');
    }
}

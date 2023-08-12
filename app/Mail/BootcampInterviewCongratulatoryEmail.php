<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BootcampInterviewCongratulatoryEmail extends Mailable
{
  use SerializesModels;
    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->markdown('emails.Bootcamp-interview-congratulatory-email-view')
            ->subject('Congratulations! Welcome to the Web Development Boot Camp.')
            ->with('email', $this->email); // Pass the email to the Blade view
    }




  

  
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendtoadmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        return $this->markdown('mail.sendtoadmin')->with(['name' => $this->name, 'email' => $this->email, 'message' => $this->message, 'phone' => $this->phone])->subject($this->name.' Sent you a contact mail from '.env('APP_NAME'));
    }
}

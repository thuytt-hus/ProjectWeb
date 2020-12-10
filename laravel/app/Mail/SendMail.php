<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sub;
    public $mes;
    public $data;

    public function __construct($subject, $message, $data = [])
    {
        $this->sub = $subject;
        $this->mes = $message;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject = $this->sub;
        $e_message = $this->mes;
        $e_data = $this->data;
        $email = $this->view('admin.content.email.contentemail', compact("e_message"))->subject($e_subject);
        if (!empty($e_data)) {
            foreach ($e_data as $data) {
                $email->attach($data['file'], $data['options']);
            }
        }

        return $email;
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

//1)use envelope functions(ex. Address)
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    //2)define property called 'data' to be used for all functions in this class
    public $data;
    /**
     * Create a new message instance.
     */

    //3)$data here is the variable sent from controller
    public function __construct($data)
    {
        //4)assign the data sent from controller to property
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    //envelope is the outer part of email
    public function envelope(): Envelope
    {
        return new Envelope(
            //5)add address and subject to your email
            from: new Address($this->data['email'], $this->data['firstName']),
            // subject: $this->data['content'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            //6)define view and send $data
            view: 'mails.contactMailContent',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

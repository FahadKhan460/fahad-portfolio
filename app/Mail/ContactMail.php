<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class ContactMail extends Mailable
{
    use SendGrid;

    public function __construct(private readonly array $data)
    {

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('fadikhan460@gmail.com', $this->data['name']),
            to: [
                new Address('fadikhan460@gmail.com', 'Fahad Amjad'),
            ],
            subject: $this->data['subject'],
        );
    }

    public function build(): self
    {
        return $this->html('<strong>' . $this->data['email'] . '</strong> ' . $this->data['message']);
    }
}

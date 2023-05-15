<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Crie uma nova instância de mensagem.
     */
    public function __construct(public readonly array $data)
    {
    }

    /**
     * Pegue o envelope da mensagem.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['fromEmail'], $this->data['fromName']),
            subject: $this->data['subject'],
        );
    }

    /**
     * Obtenha a definição do conteúdo da mensagem.
     */
    public function content(): Content
    {
        return new Content(
            html: 'mails.contact',
        );
    }

    /**
     * Obtenha os anexos da mensagem.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

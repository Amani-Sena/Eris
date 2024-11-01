<?php

namespace App\Mail;

use App\Models\Budget;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewBudgetMail extends Mailable {

    use Queueable, SerializesModels;
    public $budget;
    public $date;
    public $time;
    public $cep;
    public $url;

    /**
     * Create a new message instance.
     */
    public function __construct(Budget $budget) {
        $this->budget = $budget->id;
        $this->date = date('d/m/Y', strtotime($budget->date));
        $this->time = $budget->time;
        $this->cep = $budget->cep;
        $this->url = route('budget.show', ['budget' => $budget->id]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo agendamento!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.new-budget',
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

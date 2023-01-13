<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $from_email;
    public $subject;
    public $content;
    public $pdf;
    public $fliename;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from_email,$subject,$content,$pdf,$fliename)
    {
            $this->from_email=$from_email;
            $this->subject=$subject;
            $this->content=$content;
            $this->pdf=$pdf;
            $this->fliename= $fliename;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * @return SendMail
     */
    public function build()
    {
        return $this->view('pdf')
            ->to($this->from_email)
            ->subject($this->subject)
            ->with([
                'content' => $this->content,
            ])
            ->attach($this->pdf, [
                'as' => $this->fliename.'.pdf',
                'mime' => 'application/pdf',
            ]);
    }



    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'pdf',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {

    }
}

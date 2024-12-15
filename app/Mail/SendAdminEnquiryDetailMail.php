<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAdminEnquiryDetailMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $email;
    private string $phone;
    private string $mail_subject;
    private string $mail_message;

    /**
     * Create a new message instance.
     */
    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $mail_subject,
        string $mail_message,
    )
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->mail_subject = $mail_subject;
        $this->mail_message = $mail_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $mail_subject = $this->mail_subject;
        $mail_message = $this->mail_message;
        return $this->subject('Enquiry Received From Website')->view('mail', compact(
            'name',
            'email',
            'phone',
            'mail_subject',
            'mail_message'
        ));
    }

}

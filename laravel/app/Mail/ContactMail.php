<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $title;
    private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body  = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('view.name');
        return $this
//            ->from('example@gmail.com')
//            ->from('info@giga-planet.com')
            ->from($this->email)
//            ->subject('自動送信メール')
            ->subject('ギガプラネットお問い合わせフォームメール')
            ->view('contact.mail')
            ->with([
                'email' => $this->email,
                'title' => $this->title,
                'body'  => $this->body,
            ]);
    }
}

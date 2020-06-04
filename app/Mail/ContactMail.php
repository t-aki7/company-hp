<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    protected $content;
    protected $viewStr;
 
    public function __construct($content, $viewStr = 'to')
    {
        $this->content = $content;
        $this->viewStr = $viewStr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacts.emails.'. $this->viewStr)
            ->to($this->content['to'], $this->content['to_name'])
            ->bcc($this->content['my_adress'])
            ->from($this->content['my_adress'], $this->content['my_name'])
            ->subject($this->content['subject'])
            ->with([
                'content' => $this->content,
            ]);
    }
}

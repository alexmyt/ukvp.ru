<?php

namespace ukvp\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BackCallRequested extends Mailable
{
    use Queueable, SerializesModels;
    
    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestData)
    {
        $this->phone = $requestData['phone'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('website@ukvp.ru')->text('emails.requests.backcall');
    }
}

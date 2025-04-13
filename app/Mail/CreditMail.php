<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreditMail extends Mailable
{
    use Queueable, SerializesModels;

  /**
     * Create a new message instance.
     *
     * @return void
     */
    public $amount, $balance, $purpose;
    public function __construct($amount, $balance, $purpose)
    {
        $this->amount = $amount;
        $this->balance = $balance;
        $this->purpose = $purpose;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = ' Credit Transaction Notification';
        $address = 'support@feesremit.com';
        $name = 'FeesRemit';
        return $this->view('email.credit-notification')
                    ->subject($subject)
                    ->from($address, $name);
    }
}

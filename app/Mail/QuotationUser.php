<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $details =  $this->user;
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->view('emails.quotation-user', compact('details'));
    }
}

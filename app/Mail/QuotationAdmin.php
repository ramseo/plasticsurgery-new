<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationAdmin extends Mailable
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
                    ->view('emails.quotation-admin', compact('details'))
                    ->subject('Quotation from '.$details->vendor_data['city'] .' for '.$details->vendor_data['vendor_business_name'])
                    ;
    }
}

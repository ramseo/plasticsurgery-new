<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\LeadFormMail;
use App\Mail\LeadFormMailUser;

class leadform extends Model
{
    use HasFactory;
    protected $table = 'leads';

    public $fillable = [
        'name', 'phone', 'email', 'location', 'gender', 'appointment_for', 'age', 'message', 'time', 'url', '_token'
    ];

    /**

     * Write code on Method

     *

     * @return response()

     */

    public static function boot()
    {
        parent::boot();

        static::created(function ($item) {
            $to = Setting('email');
            Mail::to($to)->send(new LeadFormMail($item));
        });

        static::created(function ($item) {
            $to = Setting('email');
            Mail::to($item->email)->send(new LeadFormMailUser($item));
        });
    }
}

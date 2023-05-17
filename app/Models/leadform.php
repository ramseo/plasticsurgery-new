<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\LeadFormMail;

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
            $adminEmail = "vik@seobooklab.com";

            Mail::to($adminEmail)->send(new LeadFormMail($item));
        });
    }
}

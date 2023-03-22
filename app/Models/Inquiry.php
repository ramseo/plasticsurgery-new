<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiry_phone';

    protected $fillable = ['_token'];

    protected $dates = [
        'created_at',
    ];
}

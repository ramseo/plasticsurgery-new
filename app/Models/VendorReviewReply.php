<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorReviewReply extends Model
{
    use HasFactory;
    protected $table = 'vendor_reviews_reply';

    protected $fillable = ['_token'];

    protected $dates = [
        'created_at',
    ];
}

<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class VendorReview extends Model
{
    public $timestamps = false;
    protected $table = 'vendor_reviews';

    protected $fillable = ['_token'];

    protected $dates = [
        'created_at',
    ];

}

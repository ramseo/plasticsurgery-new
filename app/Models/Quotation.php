<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public $timestamps = false;
    protected $table = 'vendor_quotation';

    protected $fillable = ['_token'];

    protected $dates = [
        'created_at',
    ];

}

<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class UserQuotation extends Model
{
    public $timestamps = false;
    protected $table = 'user_quotation';

    protected $fillable = ['_token'];

}

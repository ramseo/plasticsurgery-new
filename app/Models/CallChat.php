<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class CallChat extends Model
{
    public $timestamps = false;
    protected $table = 'call_chat';

    protected $fillable = ['_token'];

}

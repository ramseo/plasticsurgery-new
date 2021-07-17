<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    public $timestamps = false;
    protected $table = 'newsletter';

    protected $dates = [
        'created_at',
    ];

}

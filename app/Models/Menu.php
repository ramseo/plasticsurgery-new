<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;
    protected $table = 'menus';

    protected $dates = [
        'created_at',
    ];

}

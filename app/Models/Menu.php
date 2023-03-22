<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;
    protected $table = 'menuitem';
    protected $primaryKey = "id";

    protected $guarded = [
        'id',
        '_token'
    ];

    protected $dates = [
        'created_at',
    ];

}

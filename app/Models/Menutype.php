<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menutype extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'menutype';
    protected $primaryKey = "menu_id";

    protected $guarded = [
        'id',
        '_token'
    ];

    protected $dates = [
        'created_at',
    ];
}

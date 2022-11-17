<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $table = 'vendor_reviews';
    protected $primaryKey = "id";

    protected $guarded = [
        'id',
        '_token'
    ];

    protected $dates = [
        'created_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalityModel extends Model
{
    use HasFactory;

    protected $table = "locality";

    // Corrected from "filltable" to "fillable"
    protected $fillable = [
        'street', 'neighborhood', 'number', 'ZIP code', 'city', 'state', 'country'
    ];
}

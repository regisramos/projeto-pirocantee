<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitorModel extends Model
{
    use HasFactory;

    protected $table = "competitor";

    // Corrected from "filltable" to "fillable"
    protected $fillable = [
        'name', 
        'age', 
        'height', 
        'weight', 
        'gender', 
        'CPF', 
        'RG', 
        'team'
    ];
}

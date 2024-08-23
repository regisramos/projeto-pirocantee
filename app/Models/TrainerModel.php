<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerModel extends Model
{
    use HasFactory;

    protected $table = "trainer";

    // Corrected from "filltable" to "fillable"
    protected $fillable = [
        'name', 
        'age', 
        'height', 
        'weight', 
        'CPF', 
        'RG'
    ];
}

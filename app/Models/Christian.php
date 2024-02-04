<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Christian extends Model
{
    use HasFactory;

    protected $fillable = [
        'clergy_id',
        'first_name',
        'last_name',
        'address',
        'mother_name',
        'father_name',
        'godparent',
        'password',
    ];
}

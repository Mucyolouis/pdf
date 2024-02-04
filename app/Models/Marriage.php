<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    use HasFactory;

    protected $fillable = [
        'bride_first_name',
        'bride_last_name',
        'groom_first_name',
        'groom_last_name',
        'god_father_name',
        'god_mother_name',
        'telephone',
        'address',
        'is_approved',
        'clergy_id',
        'email',
        'password',
        'married_date',

    ];

}

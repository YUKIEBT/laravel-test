<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'family-name',
        'first-name',
        'gender',
        'email',
        '1st-tel',
        '2nd-tel',
        '3rd-tel',
        'address',
        'building',
        'category',
        'content'
    ];
}

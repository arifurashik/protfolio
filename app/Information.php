<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
     protected $fillable = [
        'full_name',
        'father_name',
        'mother_name',
        'present_address',
        'permanent_address',
        'date_of_birth',
        'height',
        'religion',
        'marital_status',
        'nationality',
        'location',
        'last_degree',
        'professional_degree',
        'phone',
        'email',
        'website',
        'career_level',
        'experience',
        'summary',
        'image',
        'pdf',
        'qrimage',
    ];
}

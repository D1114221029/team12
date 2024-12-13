<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $table = "government_agencies_staffs";

    protected $fillable =[
        'agency_type',
        'total_people',
        'political_staff',
        'senior_rank_staff',
        'recommended_rank_staff',
        'appointed_rank_staff',
        'average_age',
        'average_seniority',
    ];
}

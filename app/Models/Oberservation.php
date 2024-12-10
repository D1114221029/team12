<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oberservation extends Model
{
    use HasFactory;
    protected $table = "agency_statistics";
    protected $fillable =[
        'agency_type',
        'total_count',
        'government_officials',
        'simple_appointees',
        'recommended_appointees',
        'commissioned_appointees',
        'average_age',
        'average_seniority',
    ];
}

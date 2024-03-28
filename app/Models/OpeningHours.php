<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningHours extends Model
{
    use HasFactory;

    protected $fillable = [
        'tourist_place_id',
        'days',
        'status',
        'opening_time',
        'closing_time',
    ];

    protected $table = 'tourist_places_opening_hours';
}

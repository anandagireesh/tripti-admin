<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristPlaces extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
        'category',
        'description',
        'fees',
        'guidelines',
    ];

    protected $table = 'tourist_places';
}

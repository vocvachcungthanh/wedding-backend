<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'brides_name',
        'grooms_name',
        'address_home_brides',
        'address_home_grooms_name',
        'map_brides',
        'map_grooms',
        'time_wedding',
        'facebook_brides',
        'facebook_grooms',
        'instagram_brides',
        'instagram_grooms',
        'created_at',
        'updated_at'
    ];
}
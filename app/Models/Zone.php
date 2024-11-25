<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'background_image',
        'required_level',
        'is_city',
        'min_ennemies_in_party',
        'max_ennemies_in_party',
        'max_ennemies_in_zone'
    ];
}

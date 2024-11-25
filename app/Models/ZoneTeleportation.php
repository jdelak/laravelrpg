<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZoneTeleportation extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'zone_id',
        'position',
        'zone_to',
        'direction'
    ];
}

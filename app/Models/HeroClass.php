<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroClass extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'bonus_vitality',
        'vitality_per_level',
        'bonus_dexterity',
        'dexterity_per_level',
        'bonus_intelligence',
        'intelligence_per_level',
        'bonus_strength',
        'strength_per_level',
        'bonus_defense',
        'defense_per_level',
        'attack_type'
    ];
}

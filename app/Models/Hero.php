<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'hero_class_id',
        'sex',
        'max_vitality',
        'max_dexterity',
        'max_strength',
        'max_intelligence',
        'max_defense',
        'current_hp',
        'current_mana',
        'current_position'

    ];
}
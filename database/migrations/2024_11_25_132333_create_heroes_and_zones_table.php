<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('background_image');
            $table->integer('required_level')->default(1);
            $table->boolean('is_city');
            $table->integer('min_ennemies_in_party')->default(0);
            $table->integer('max_ennemies_in_party')->default(0);
            $table->integer('max_ennemies_in_zone')->default(0);
        });

        Schema::create('zone_teleportations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->constrained();
            $table->json('position');
            $table->integer('zone_to');
            $table->string('direction');
        });

        Schema::create('hero_classes', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('bonus_vitality');
            $table->integer('vitality_per_level');
            $table->integer('bonus_dexterity');
            $table->integer('dexterity_per_level');
            $table->integer('bonus_intelligence');
            $table->integer('intelligence_per_level');
            $table->integer('bonus_strength');
            $table->integer('strength_per_level');
            $table->integer('bonus_defense');
            $table->integer('defense_per_level');
            $table->enum('attack_type',['melee', 'range', 'magic']);
        });

        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('hero_class_id')->constrained();
            $table->smallInteger('sex')->default(0);
            $table->integer('max_vitality');
            $table->integer('max_dexterity');
            $table->integer('max_strength');
            $table->integer('max_intelligence');
            $table->integer('max_defense');
            $table->integer('max_items_in_inventory')->default(100);
            $table->integer('current_level')->default(1);
            $table->integer('current_hp');
            $table->integer('current_mana');
            $table->integer('zone_id')->default(1);
            $table->integer('last_city_visited')->nullable();
            $table->json('current_position');
            $table->integer('elo')->default(1000);
            $table->bigInteger('money');
            $table->bigInteger('current_experience');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
        Schema::dropIfExists('hero_classes');
        Schema::DropIfExists('zone_teleportations');
        Schema::dropIfExists('zones');
    }
};

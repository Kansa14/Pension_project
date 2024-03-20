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
        Schema::create('ppo_family_details', function (Blueprint $table) 
        {
            $table->id();
            $table->string('ppo_no',15);
            $table->tinyInteger('family_id');
            $table->string('dep_name');
            $table->string('relation');
            $table->date('dep_birth_dt');
            $table->string('handicapped');
            $table->index(['ppo_no','family_id']);
            $table->foreign('ppo_no')->references('ppo_no')->on('ppo_general_details');
            //$table->foreignId('ppo_no')->constrained('ppo_general_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppo_family_details');
    }
};

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
        Schema::create('ppo_general_details', function (Blueprint $table) {

            $table->id();
            $table->string('ppo_no',15)->unique();
            $table->date('ppo_issue_dt');
            $table->integer('case_no');
            $table->integer('scale');
            $table->date('pension_commence_dt');
            $table->string('per_name');
            $table->string('post_held');
            $table->string('office');
            $table->string('address');
            $table->date('birth_dt');
            $table->date('appoint_dt');
            $table->date('ret_dt');
            $table->date('death_dt')->nullable();
            $table->string('pen_class');
            $table->string('qs');
            $table->string('nqs');
            $table->integer('last_pay');
            $table->binary('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppo_general_details');
    }
};

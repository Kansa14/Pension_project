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
        Schema::create('ppo_emoluments', function (Blueprint $table) {
            $table->id();
            $table->string('ppo_no',15);
            $table->unsignedInteger('emol_id');
            $table->integer('pp_rate');
            $table->date('pp_from_dt');
            $table->date('pp_to_dt');
            $table->integer('fp_er');
            $table->date('fp_er_from_dt');
            $table->date('fp_er_to_dt');
            $table->integer('fp_nr');
            $table->date('fp_nr_from_dt');
            $table->date('fp_nr_to_dt');
            $table->integer('avg_emol');
            $table->integer('fp_emol');
            $table->integer('dcrg_emol');
            $table->integer('pen_amt');
            $table->integer('pen_withheld');
            $table->integer('comm_pen');
            $table->integer('net_pen');
            $table->integer('dcrg_adm');
            $table->integer('fp_amt');
            $table->index(['ppo_no','emol_id']);
            $table->foreign('ppo_no')->references('ppo_no')->on('ppo_general_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppo_emoluments');
    }
};

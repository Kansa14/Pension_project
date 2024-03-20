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
        Schema::create('ag_emp_logins', function (Blueprint $table)
       {
                $table->string('app_no',15)->primary(); 
                $table->string('gpf_series', 5);
                $table->bigInteger('gpf_acc_no');
                $table->bigInteger('emp_mobile_no')->nullable();
                $table->string('mpin', 32);
                $table->string('mpin_hash', 100);
                $table->timestamp('updated_on');
                $table->integer('rawmpin');
                $table->char('t_flag', 1)->nullable();
                $table->timestamp('mpin_notified_on')->nullable(); // Allow null values
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ag_emp_logins');
    }
};

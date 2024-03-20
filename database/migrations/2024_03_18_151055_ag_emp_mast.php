<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
     
    public function up(): void
    {
        /*
        Schema::create('ag_emp_mast', function (Blueprint $table)
        {
            $table->id();
           // $table->string('app_no',15)->unique();
            $table->string('app_no',15)->unique();
            $table->string('ppo_no',15);
            $table->string('emp_name'); 
            $table->char('gender');
            $table->string('designation');
            $table->date('emp_birth_dt');
            $table->date('emp_joining_dt');
            $table->char('ag_ddo_code');
            $table->char('ag_source_cd');
            $table->char('ag_dept_code');
            $table->integer('gpf_acc_no',50);
            $table->char('gpf_series');
            $table->integer('basic_pay',50);
            $table->char('c_l_flag');
            $table->integer('fin_year_cd',50);
            $table->char('final_payment_flag');
            $table->char('full_gpf_acc_no');
            $table->date('emp_supan_dt')->nullable();
            $table->char('eis_emp_cd');
            $table->integer('emp_mobile_no',50);
            $table->string('emp_email')->nullable();
            $table->foreign('ppo_no')->references('ppo_no')->on('ppo_general_details');
            $table->timestamps();
        });*/

        Schema::create('ag_emp_mast', function (Blueprint $table)
        {
            $table->id();
            $table->string('app_no', 15)->unique();
            $table->string('ppo_no', 15);
            $table->string('emp_name'); 
            $table->char('gender');
            $table->string('designation');
            $table->date('emp_birth_dt');
            $table->date('emp_joining_dt');
            $table->char('ag_ddo_code');
            $table->char('ag_source_cd');
            $table->char('ag_dept_code');
            $table->integer('gpf_acc_no');
            $table->char('gpf_series');
            $table->integer('basic_pay')->nullable();
            $table->char('c_l_flag');
            $table->integer('fin_year_cd');
            $table->char('final_payment_flag');
            $table->char('full_gpf_acc_no');
            $table->date('emp_supan_dt')->nullable();
            $table->char('eis_emp_cd');
            $table->bigInteger('emp_mobile_no')->nullable();
            $table->string('emp_email')->nullable();
            $table->foreign('ppo_no')->references('ppo_no')->on('ppo_general_details');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ag_emp_mast');
    }
};

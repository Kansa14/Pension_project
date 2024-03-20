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
        DB::table('roles')->insert([
            ['name' => 'subscriber', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ddo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'treasury', 'created_at' => now(), 'updated_at' => now()],
            // Add more role records as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

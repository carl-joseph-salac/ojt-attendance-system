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
        Schema::table('attendances', function (Blueprint $table) {
            $table->string('time_in')->change();
            $table->string('break_out')->change();
            $table->string('break_in')->change();
            $table->string('time_out')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->time('time_in')->change();
            $table->time('break_out')->change();
            $table->time('break_in')->change();
            $table->time('time_out')->change();
        });

    }
};

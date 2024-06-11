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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company');
            $table->string('departure');
            $table->string('arrival');
            $table->time('time_departure');
            $table->time('time_arrival');
            $table->string('code');
            $table->unsignedTinyInteger('cabin numbers');
            $table->boolean('in_time')->default(true);
            $table->boolean('cancelled')->default(false);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure');
            $table->dropColumn('arrival');
            $table->dropColumn('time_departure');
            $table->dropColumn('time_arrival');
            $table->dropColumn('code');
            $table->dropColumn('cabin numbers');
            $table->dropColumn('in_time');
            $table->dropColumn('cancelled');
        });
    }
};

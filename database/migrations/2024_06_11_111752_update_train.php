<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    * 
    * UPDATE TABLE "trains" (
    *  ‘company’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
    *  ‘departure’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
    *  ‘arrival’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
    *  ‘time_departure’ TIME, //
    *  ‘time_arrival’ TIME, //
    *  ‘code’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
    *  ‘price’ DECIMAL(10,2) NOT NULL,
    *  ‘cabin numbers’ UNSIGNED TINIYNT NOT NULL // impossibile che sia vuoto e quindi not null
    *  ‘in_time’ TINIYNT NOT NULL DEFAULT(1) // true è(1),non c’è boolean in mysql quindi TINYINT
    *  ‘cancelled’ TINIYNT NOT NULL DEFAULT(0) // false è(0),non c’è boolean in mysql quindi TINYINT
    * 
    * )
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
     * Per ogni colonna funzione in caso di rollback per cancellarla.
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

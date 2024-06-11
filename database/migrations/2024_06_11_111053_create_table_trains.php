<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    * Run the migrations.
    * CREATE TABLE "trains" (
    * ‘id’ Unsigned BIGINT NOT NULL AUTO_INCREMENT,
    * Vediamo questi nella tabella in php admin:
    *   ‘created_at’ TIMESTAMP NULL,  à creati per seguire ultimo inserimento
    *  ‘updated_at’ TIMESTAMP NULL,  à creati per seguire ultimo aggiornamento
    * ‘PRIMARY KEY(‘id’)
    * 
    * )
    */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

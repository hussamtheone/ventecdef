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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id('idDemande');
            $table->unsignedBigInteger('idClient');
            $table->unsignedBigInteger('idTransport');
            $table->string('destination');
            $table->date('dateDemande');
            $table->timestamps();

            $table->foreign('idClient')->references('id')->on('users');
            $table->foreign('idTransport')->references('id')->on('transports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};

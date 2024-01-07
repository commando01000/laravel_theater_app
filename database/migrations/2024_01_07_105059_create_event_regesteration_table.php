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
        Schema::create('event_registeration', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Mobile_Number');
            $table->string('Email');
            $table->Date('Theatre_Event_Date');
            $table->string('Movie_Name');
            $table->DATETIME('Showdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_regesteration');
    }
};

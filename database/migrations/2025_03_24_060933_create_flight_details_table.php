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
        Schema::create('flight_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guest_detail_id')->constrained()->onDelete('cascade');
            $table->string('flight_ticket')->nullable();
            $table->boolean('visa_required')->default(0);
            $table->string('visa_status')->nullable();
            $table->string('arrival_flight_number')->nullable();
            $table->date('arrival_flight_date')->nullable();
            $table->time('arrival_flight_time')->nullable();
            $table->string('departure_flight_number')->nullable();
            $table->date('departure_flight_date')->nullable();
            $table->time('departure_flight_time')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_details');
    }
};

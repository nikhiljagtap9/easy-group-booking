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
        Schema::create('guest_details', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('full_name');
            $table->string('nickname')->nullable();
            $table->boolean('dummy_booking')->default(0);
            $table->string('group');
            $table->string('employee_id')->nullable();
            $table->string('email');
            $table->string('whatsapp_number')->nullable();
            $table->string('country_born')->nullable();
            $table->string('country_based')->nullable();
            $table->string('tshirt_size')->nullable();
            $table->string('profile_picture')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_details');
    }
};

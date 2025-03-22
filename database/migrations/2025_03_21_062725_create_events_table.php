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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('hotel_name')->nullable();
            $table->string('client_pay_form')->nullable();
            $table->string('client_pay_to')->nullable();
            $table->decimal('room_rate', 10, 2)->nullable();
            $table->decimal('extra_guest_rate', 10, 2)->nullable();
            $table->decimal('early_check_in_fee', 10, 2)->nullable();
            $table->decimal('late_check_out_fee', 10, 2)->nullable();
            $table->date('check_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->time('check_out_time')->nullable();
            $table->time('check_in_time')->nullable();
            $table->decimal('cut_off_cost', 10, 2)->nullable();
            $table->decimal('early_departure_cost', 10, 2)->nullable();
            $table->string('deadline_first')->nullable();
            $table->string('deadline_second')->nullable();
            $table->unsignedBigInteger('group')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps(); // created_at, updated_at
            $table->boolean('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
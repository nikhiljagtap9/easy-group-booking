<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterHotelsTableAddCreatedByUpdatedBy extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            // Remove created_on and updated_on
            $table->dropColumn(['created_on', 'updated_on']);
            
            // Add created_by and updated_by
            $table->unsignedBigInteger('created_by')->nullable()->after('hotel_name');
            $table->unsignedBigInteger('updated_by')->nullable()->after('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            // Rollback: remove created_by and updated_by
            $table->dropColumn(['created_by', 'updated_by']);

            // Add created_on and updated_on back
            $table->timestamp('created_on')->nullable();
            $table->timestamp('updated_on')->nullable();
        });
    }
}


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
        Schema::disableForeignKeyConstraints();

        Schema::create('blood_donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blood_bank_id')->constrained();
            $table->foreignId('donor_id')->constrained();
            $table->enum('blood_type', ["A+",""]);
            $table->integer('units');
            $table->dateTime('donation_date');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_donations');
    }
};

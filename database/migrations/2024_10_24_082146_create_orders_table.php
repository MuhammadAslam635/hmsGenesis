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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pharmacy_id')->constrained();
            $table->foreignId('salesman_id')->constrained();
            $table->date('delivery_date')->nullable();
            $table->double('total', 12, 2);
            $table->double('subtotal', 12, 2);
            $table->double('discount', 12, 2);
            $table->enum('order_status', ["pending","ordered","process","dispatch","completed","cancelled"]);
            $table->date('cancel_date')->nullable();
            $table->text('canceling_reason')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

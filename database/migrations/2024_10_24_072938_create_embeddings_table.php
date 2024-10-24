<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'pgsql2';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::connection($this->connection)->create('embeddings', function (Blueprint $table) {
            $table->id();
            $table->vector('embeddings',512);
            $table->text('content');
            $table->string('type')->nullable();
            $table->string('sourcetype')->nullable();
            $table->string('sourcename')->nullable();
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
        Schema::connection($this->connection)->dropIfExists('embeddings');
    }
};

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
        Schema::create('mangos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('variety');
            $table->string('origin');
            $table->string('grade')->nullable();
            $table->decimal('price_per_box', 10, 2);
            $table->integer('stock_quantity');
            $table->date('booking_start_date');
            $table->date('booking_end_date');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangos');
    }
};

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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->decimal('total', 10)->default(10000);
            $table->enum('type', ['check-up', 'consultation', 'follow-up', 'diagnostic', 'emergency'])->default('consultation');
            $table->string('health_status')->nullable();
            $table->string('notes')->nullable();
            $table->timestamp('scheduled_date');
            $table->authors();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

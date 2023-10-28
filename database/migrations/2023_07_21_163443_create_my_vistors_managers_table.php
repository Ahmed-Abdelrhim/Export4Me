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
        Schema::create('my_vistors_managers', function (Blueprint $table) {
            $table->id();
            $table->string('vistor_code');
            $table->text('vistor_date');
            $table->time('vistor_time');
            $table->decimal('lat', 10, 8);
            $table->decimal('long', 10, 8);
            $table->text('notes')->nullable();
            $table->foreignId('manager_id')->constrained('managers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_vistors_managers');
    }
};

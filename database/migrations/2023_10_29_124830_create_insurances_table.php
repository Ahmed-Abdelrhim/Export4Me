<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('manager_name');
            $table->string('address');

            $table->string('website')->nullable();
            $table->string('media')->nullable();
            $table->string('email')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile_phone')->nullable();
            // images
            $table->string('commercial_record')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('importers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('manager_name');
            $table->string('address');

            $table->string('country');
            $table->string('website')->nullable();

            $table->string('media')->nullable();
            $table->string('email')->nullable();

            $table->string('landline')->nullable();
            $table->string('mobile_phone')->nullable();

            $table->string('product_name')->nullable();
            $table->string('harbor_name')->nullable();


            // المنشا المطلوب ان وجد
            $table->string('origin')->nullable();
            $table->string('product_description')->nullable();

            $table->string('size')->nullable();
            $table->string('imported_before_value')->nullable();

            $table->string('sector')->nullable();
            $table->tinyInteger('is_agreed_to_import')->nullable();

            // images
            $table->string('commercial_record')->nullable();
            $table->string('product_catalog')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('importers');
    }
};

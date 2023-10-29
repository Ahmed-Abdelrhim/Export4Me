<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('extractors', function (Blueprint $table) {
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



            $table->text('shipping_types'); // أنواع الشحن
            $table->string('harbor_type'); //  export Or import (صادر أو وارد)
            $table->string('clearance_type'); // Marine or aerial or Wild  (بري أو جوي أو بري)

            // images
            $table->string('commercial_record')->nullable();
            $table->string('license')->nullable();


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('extractors');
    }
};

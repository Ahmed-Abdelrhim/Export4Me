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
        Schema::create('exporters', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('owner_name');
            $table->string('manager_name');
            $table->string('factory_address');
            $table->string('country');
            $table->string('website')->nullable();
            $table->string('media')->nullable();
            $table->string('email')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile_phone')->nullable();

            $table->string('product_name')->nullable();
            $table->string('product_description')->nullable();
            $table->string('production_quantity')->nullable();




            $table->string('local_selling')->nullable();
            $table->string('country_export_to_before')->nullable();
            $table->string('country_export_to_before_value')->nullable();



            $table->string('exporter_place')->nullable();
            $table->string('shipping_worked_before')->nullable();

            // القطاع اللي بتنتمي اليه
            $table->string('sector')->nullable();
            // سجل مصدرين ساري
            $table->tinyInteger('exporter_record')->nullable();
            // اوراق التصدير
            $table->tinyInteger('export_paper')->nullable();
            // فريق التصوير
            $table->tinyInteger('photo_team')->nullable();

            // images
            $table->string('commercial_record')->nullable();
            $table->string('product_brochure')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exporters');
    }
};

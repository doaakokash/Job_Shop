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
       Schema::create('portfolios', function (Blueprint $table) {
         $table->id();
         $table->foreignId('service_id')->constrained('service_providers')->onDelete('cascade');
         $table->foreignId('service_provider_id')->constrained('service_providers')->onDelete('cascade');
         $table->string('main_image');
         $table->string('image');
         $table->string('image1')->nullable();
         $table->text('description');
         $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

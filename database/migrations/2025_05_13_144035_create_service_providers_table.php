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
       Schema::create('service_providers', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->string('phone_number');
           $table->string('address');
           $table->integer('age')->nullable();
           $table->string('service_name');
           $table->foreignId('user_id')->constrained()->onDelete('cascade');
           $table->foreignId('service_id')->constrained()->onDelete('cascade');
           $table->string('service_category');
           $table->text('contact_info');
           $table->decimal('min_price', 8, 2);
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_providers');
    }
};

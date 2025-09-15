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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->string('sort')->default(0);
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('slug_ar')->unique();
            $table->string('slug_en')->unique();
            $table->text('description_en');
            $table->text('description_ar');
            $table->text('quote_en');
            $table->text('quote_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

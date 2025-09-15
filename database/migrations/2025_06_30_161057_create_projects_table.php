<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ProjectCategory;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->string('sort')->default(0);
            $table->string('link');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('slug_ar')->unique();
            $table->string('slug_en')->unique();
            $table->text('description_en');
            $table->text('description_ar');
            $table->text('challenge_en')->nullable();
            $table->text('challenge_ar')->nullable();
            $table->text('overview_en')->nullable();
            $table->text('overview_ar')->nullable();
            $table->string('country_en')->nullable();
            $table->string('country_ar')->nullable();
            $table->decimal('cost', 10, 2)->default(0);
            $table->string('industry')->nullable();
            $table->string('client')->nullable();
            $table->string('core_technologies')->nullable();
            $table->foreignIdFor(ProjectCategory::class,'project_category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

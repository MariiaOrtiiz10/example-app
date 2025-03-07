<?php

use App\Models\Tag;
use App\Models\Trabajo;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->timestamps();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            //FK: de trabajo y restrincción para que no se pueda poner un ID de un trabajo que ya no existe.
            $table->foreignIdFor(Trabajo::class,'job_listing_id')->constrained()->cascadeOnDelete();
            //FK: de Tag
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tag');
    }
};

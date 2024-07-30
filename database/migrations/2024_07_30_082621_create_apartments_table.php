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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('title')->unique();
            $table->json('slug')->unique();
            $table->json('desc');
            $table->text('thumbnail');
            $table->text('gallery');
            $table->text('address');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('google_maps_link')->nullable();
            $table->text('google_maps_frame')->nullable();
            $table->text('site_link')->nullable();
            $table->boolean('featured');
            $table->integer('sort')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};

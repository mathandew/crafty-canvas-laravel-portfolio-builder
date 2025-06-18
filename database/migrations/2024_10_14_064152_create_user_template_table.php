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
        Schema::create('user_template', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('template_id')->constrained('templates')->onDelete('cascade');
            $table->string('color');
            $table->string('background');
            $table->boolean('education')->default(false);
            $table->boolean('experience')->default(false);
            $table->boolean('skills')->default(false);
            $table->boolean('services')->default(false);
            $table->boolean('projects')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_template');
    }
};

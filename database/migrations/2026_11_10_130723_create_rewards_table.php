<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rewards', function (Blueprint $table) {

            $table->id();
            $table->string('code', 50)->unique();
            $table->string('name', 180);
            $table->text('description')->nullable();
            $table->unsignedInteger('points_required');
            $table->unsignedInteger('stock')->default(0);
            $table->string('image_path')->nullable();
            $table->string('icon', 30)->nullable();
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
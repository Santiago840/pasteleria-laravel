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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->unique();
            $table->longText('description');
            $table->decimal('price')->nullable();
            $table->integer('discount');
            $table->string('size');
            $table->integer('quantity');
            $table->date('validity');
            $table->boolean('aviability');
            $table->string('imgProduct');
            $table->foreignId('categoria_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('template');
            $table->text('description')->nullable();
            $table->integer('price', unsigned: true);
            $table->integer('position', unsigned: true)->nullable();
            $table->timestamps();
        });
    }
};

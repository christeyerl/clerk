<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['free', 'craft', 'bound']);
            $table->text('description')->nullable();
            $table->integer('price', unsigned: true);
            $table->timestamps();
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('prefix')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->foreignId('address_id')->constrained();
            $table->string('nationality');
            $table->date('birth_date')->nullable();
            $table->string('birth_number')->nullable();
            $table->enum('document_type', ['id-card', 'passport'])->nullable();
            $table->string('document_number')->nullable();
            $table->timestamps();
        });
    }
};

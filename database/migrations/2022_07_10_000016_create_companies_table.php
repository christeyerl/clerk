<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('office_id')->constrained()->onDelete('cascade');
            $table->string('cin')->nullable();
            $table->string('tin')->nullable();
            $table->string('vatin')->nullable();
            $table->integer('capital', unsigned: true)->nullable();
            $table->string('execution')->nullable();
            $table->timestamps();
        });
    }
};

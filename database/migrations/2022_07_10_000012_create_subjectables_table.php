<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subjectables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');
            $table->morphs('subjectable');
            $table->string('name');
            $table->integer('price', unsigned: true);
            $table->foreignId('representative_id')->nullable()->constrained('people')->onDelete('set null');
            $table->timestamps();
        });
    }
};

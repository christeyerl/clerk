<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('registration_number')->nullable();
            $table->string('orientation_number');
            $table->string('city');
            $table->string('zip_code');
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
        });
    }
};

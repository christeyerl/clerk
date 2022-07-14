<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->morphs('authoritable');
            $table->enum('position', ['partner', 'manager', 'deposit-trustee', 'beneficial-owner', 'representative']);
            $table->integer('share', unsigned: true)->nullable();
            $table->integer('deposit', unsigned: true)->nullable();
            $table->timestamps();
        });
    }
};

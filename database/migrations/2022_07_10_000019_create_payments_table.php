<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->string('intent');
            $table->enum('status', ['pending', 'paid', 'canceled', 'refunded']);
            $table->integer('price', unsigned: true);
            $table->timestamps();
        });
    }
};

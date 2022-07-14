<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null');
            $table->morphs('orderable');
            $table->string('email');
            $table->enum('status', ['pending', 'approved', 'submitted', 'completed', 'canceled', 'refunded']);
            $table->integer('price', unsigned: true);
            $table->timestamp('submit_at')->nullable();
            $table->timestamps();
        });
    }
};

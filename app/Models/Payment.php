<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'intent',
        'status',
        'amount',
    ];

    protected $casts = [
        'status' => \App\Enums\PaymentStatus::class,
        'amount' => \App\Casts\Price::class,
    ];

    public function order(): Relations\BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}

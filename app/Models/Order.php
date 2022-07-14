<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'email',
        'status',
        'price',
        'submit_at',
    ];

    protected $casts = [
        'status' => \App\Enums\OrderStatus::class,
        'price' => \App\Casts\Price::class,
        'submit_at' => 'date',
    ];

    public function service(): Relations\BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function orderable(): Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function payment(): Relations\HasOne
    {
        return $this->hasOne(Payment::class);
    }
}

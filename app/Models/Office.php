<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Office extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'property_type',
        'owner',
    ];

    protected $casts = [
        'property_type' => \App\Enums\PropertyType::class,
    ];

    public function address(): Relations\HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function company(): Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

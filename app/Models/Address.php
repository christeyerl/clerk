<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'registration_number',
        'orientation_number',
        'city',
        'zip_code',
        'country_id',
    ];

    public function country(): Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

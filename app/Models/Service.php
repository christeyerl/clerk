<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'template',
        'description',
        'price',
        'position',
    ];

    protected $casts = [
        'price' => \App\Casts\Price::class,
        'position' => 'int',
    ];

    public function orders(): Relations\HasMany
    {
        return $this->hasMany(Order::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
    ];

    protected $casts = [
        'type' => \App\Enums\SubjectType::class,
        'price' => \App\Casts\Price::class,
    ];

    public function categories(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class)
            ->withPivot(['representative_id']);
    }
}

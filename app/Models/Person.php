<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefix',
        'first_name',
        'last_name',
        'suffix',
        'gender',
        'address_id',
        'nationality',
        'birth_date',
        'birth_number',
        'document_type',
        'document_number',
    ];

    protected $casts = [
        'gender' => \App\Enums\Gender::class,
        'birth_date' => 'date',
        'document_type' => \App\Enums\DocumentType::class,
    ];

    public function address(): Relations\BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}

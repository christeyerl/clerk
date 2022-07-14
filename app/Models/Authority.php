<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Authority extends Pivot
{
    protected $fillable = [
        'company_id',
        'position',
        'share',
        'deposit',
    ];

    protected $casts = [
        'position' => \App\Enums\AuthorityPosition::class,
        'share' => 'int',
        'deposit' => \App\Casts\Price::class,
    ];
}

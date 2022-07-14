<?php

namespace App\Models;

use App\Enums\AuthorityPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'office_id',
        'cin',
        'tin',
        'vatin',
        'capital',
        'execution',
    ];

    protected $casts = [
        'capital' => \App\Casts\Price::class,
    ];

    public function office(): Relations\HasOne
    {
        return $this->hasOne(Office::class);
    }

    public function authorities(): Relations\MorphToMany
    {
        return $this->morphToMany(Authority::class, 'authoritable')
            ->withPivot(['position', 'share', 'deposit'])
            ->withTimestamps();
    }

    public function partners(): Relations\MorphToMany
    {
        return $this->authorities()->wherePivot('position', AuthorityPosition::Partner);
    }

    public function managers(): Relations\MorphToMany
    {
        return $this->authorities()->wherePivot('position', AuthorityPosition::Manager);
    }

    public function depositTrustee(): Relations\MorphToMany
    {
        return $this->authorities()->wherePivot('position', AuthorityPosition::DepositTrustee);
    }

    public function beneficialOwners(): Relations\MorphToMany
    {
        return $this->authorities()->wherePivot('position', AuthorityPosition::BeneficialOwner);
    }

    public function representative(): Relations\MorphToMany
    {
        return $this->authorities()->wherePivot('position', AuthorityPosition::Representative);
    }

    public function subjects(): Relations\MorphToMany
    {
        return $this->morphToMany(Subject::class, 'subjectable')
            ->withPivot(['name', 'price', 'representative_id'])
            ->withTimestamps();
    }

    public function order(): Relations\MorphOne
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}

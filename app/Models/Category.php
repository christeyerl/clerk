<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, Relations};

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'parent_id',
    ];

    protected $casts = [
        'position' => 'int',
    ];

    public function parent(): Relations\BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children(): Relations\HasMany
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function subjects(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'endpoint',
        'frequency',
        'next_check'
    ];

    public function site(): BelongsTo 
    { 
        return $this->hasMany(Site::class);
    }

    public function checks(): HasMany 
    { 
        return $this->hasMany(Check::class);
    }
}

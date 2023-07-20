<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'url',
    ];

    public function user(): BelongsTo 
    { 
        return $this->hasMany(User::class);
    }

    public function endpoints(): HasMany 
    { 
        return $this->hasMany(Endpoint::class);
    }
}

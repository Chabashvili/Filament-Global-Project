<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function hospitals() : HasMany
    {
        return $this->hasMany(Hospital::class);
    }

    public function country() : BelongsTo 
    {
        return $this->belongsTo(Country::class);
    }
}

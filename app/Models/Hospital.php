<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function patients() : HasMany 
    {
        return $this->hasMany(Patient::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GalleryJsonMedia\JsonMedia\Contracts\HasMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use GalleryJsonMedia\JsonMedia\Concerns\InteractWithMedia;


class Patient extends Model implements HasMedia
{
    use HasFactory;
    use InteractWithMedia;

    protected $casts =[
        'images' => 'array',
        'documents' => 'array',
    ];
    
    protected function getFieldsToDeleteMedia(): array {
        return ['images','documents'];
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
 
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }

    public function hospital(): BelongsTo
    {
        return $this->belongsTo(Hospital::class);
    }
}

<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'adopter_name', 'animal_name', 'title', 'description_short', 'description_long', 'adoption_country', 'animal_id', 'photo_main', 'photos_additional', 'youtube_links'
    ];


    protected $casts = [
        'location' => Location::class,
        'photos_additional' => 'array',
        'youtube_links' => 'array',
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
}

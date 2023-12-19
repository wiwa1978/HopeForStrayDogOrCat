<?php

namespace App\Models;

use App\Models\Media;
use App\Enums\Location;
use App\Enums\AnimalType;
use App\Models\Treatment;
use App\Enums\AnimalStatus;
use App\Models\SuccessStory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'location', 'status', 'size', 'description', 'age', 'gender', 'type', 'chipped', 'vaccinated', 'rabies', 'kids_friendly', 'cats_friendly', 'dogs_friendly', 'sterilized', 'environment', 'photo_main', 'photos_additional', 'videos', 'youtube_links'

    ];

    protected $casts = [
        'type' => AnimalType::class,
        'location' => Location::class,
        'status' => AnimalStatus::class,
        'videos' => 'array',

        'photos_additional' => 'array',
        'youtube_links' => 'array',
        'chipped' => 'boolean'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }

    public function successstories(): HasMany
    {
        return $this->hasMany(SuccessStory::class);
    }


}

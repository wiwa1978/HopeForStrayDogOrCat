<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'notes', 'animal_id', 'price'
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
}

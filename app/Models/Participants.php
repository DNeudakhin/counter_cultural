<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Participants extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function socialMedias(): HasMany
    {
        return $this->hasMany(SocialMedias::class);
    }

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(
            Events::class,
            'participants_events'
        );
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(
            Genres::class,
            'participants_genres'
        );
    }
}

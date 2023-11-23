<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genres extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participants::class);
    }
}

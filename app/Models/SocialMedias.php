<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedias extends Model
{
    use HasFactory;

    public $timestamps = false;

    const ENUM = [
        'instagram', 'telegram',
        'soundcloud', 'resident-advisor'
    ];
}

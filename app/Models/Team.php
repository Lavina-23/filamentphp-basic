<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'job_title',
        'facebook',
        'twitter',
        'instagram',
        'linkedin'
    ];
}

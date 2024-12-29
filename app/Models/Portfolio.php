<?php

namespace App\Models;

use Database\Factories\PortfolioFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}

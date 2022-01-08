<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearInReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'text',
    ];
}

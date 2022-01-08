<?php

declare(strict_types=1);

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class YearInReview
 * @package App
 * @mixin Eloquent
 */
class YearInReview extends Model
{
    protected $fillable = [
        'year',
        'text',
    ];
}

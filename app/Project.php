<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}

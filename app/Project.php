<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package App
 * @mixin Eloquent
 */
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

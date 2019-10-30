<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 * @package App
 * @mixin Eloquent
 */
class Skill extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'parent_id',
        'order',
    ];

    public function parent()
    {
        return $this->belongsTo(Skill::class, 'parent_id', 'id');
    }

    public function scopeRoot(Builder $query)
    {
        $query->whereNull('parent_id');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }

    public function children()
    {
        return $this->hasMany(Skill::class, 'parent_id', 'id');
    }

    public function getShortNameAttribute()
    {
        // Filter out parentheses
        $shortName = preg_replace('/ *\(.*\) */', '', $this->name);

        if (strlen($shortName) > 10) {
            $shortName = preg_replace('/[^A-Z]/', '', $shortName);
        }

        return $shortName;
    }
}

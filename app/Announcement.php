<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['subject', 'description', 'published_by'];

    public function setPublishedByAttribute($value)
    {
        $this->attributes['published_by'] = auth()->user()->member_id;
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}

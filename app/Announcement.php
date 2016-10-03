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

    public function properComments()
    {
        return $this->comments()->where('is_proper', 'proper')->latest()->get();
    }

    public function publishedBy()
    {
        return $this->hasOne('App\Member', 'member_id', 'published_by');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $fillable = ['subject', 'description', 'published_by'];

    public function setPublishedByAttribute($value)
    {
//        TODO: Change published_by
//        $this->attributes['published_by'] = auth()->user()->member_id;
        $this->attributes['published_by'] = 'admin';
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}

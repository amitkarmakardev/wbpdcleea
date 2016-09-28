<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Comment extends Model
{

    protected $fillable = ['content', 'commentable_type', 'commentable_id', 'published_by'];
    
    public function commentable()
    {
        return $this->morphTo();
    }
    
    public function setPublishedByAttribute($value)
    {
        $this->attributes['published_by'] = auth()->user()->member_id;

    }

    public function setCommentableTypeAttribute($value)
    {
        $this->attributes['commentable_type'] = 'App\\' . ucwords($value);
    }

}

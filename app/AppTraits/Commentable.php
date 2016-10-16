<?php

namespace App\AppTraits;

trait Commentable{

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable')->latest();
    }

    public function properComments()
    {
        return $this->comments()->where('is_proper', 'proper')->latest()->get();
    }

}
<?php

namespace App\AppTraits;

trait Publishable{

    public function setPublishedByAttribute($value)
    {
        $this->attributes['published_by'] = auth()->user()->member_id;
    }

    public function publishedBy()
    {
        return $this->hasOne('App\Member', 'member_id', 'published_by');
    }

}
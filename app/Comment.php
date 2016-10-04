<?php

namespace App;

use App\AppTraits\Publishable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Comment extends Model
{
    use Publishable;

    protected $fillable = ['content', 'commentable_type', 'commentable_id', 'published_by'];
    
    public function commentable()
    {
        return $this->morphTo();
    }

    public function setCommentableTypeAttribute($value)
    {
        $this->attributes['commentable_type'] = 'App\\' . ucwords($value);
    }


    public function isProper()
    {
        return $this->is_proper == 'proper';
    }

}

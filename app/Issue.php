<?php

namespace App;

use App\AppTraits\Commentable;
use App\AppTraits\Publishable;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use Publishable, Commentable;

    protected $fillable = ['subject', 'description', 'published_by'];

}

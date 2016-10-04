<?php

namespace App;

use App\AppTraits\Commentable;
use App\AppTraits\Publishable;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    use Commentable, Publishable;

    protected $fillable = ['subject', 'description', 'published_by'];

}

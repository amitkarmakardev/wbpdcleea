<?php

namespace App;

use App\AppTraits\Publishable;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use Publishable;

    protected $fillable = ['subject', 'description', 'published_by'];

    public function progress()
    {
        return $this->hasMany('App\Progress');
    }
}
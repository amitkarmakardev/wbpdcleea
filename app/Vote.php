<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['poll_id', 'cast_by', 'poll_option_id'];

    public function setCastByAttribute($value)
    {
//        TODO: Change cast_by to currently logged in user
        $this->attributes['cast_by'] = 'admin';
    }
}

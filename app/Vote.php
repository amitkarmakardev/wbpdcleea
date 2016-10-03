<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['poll_id', 'cast_by', 'poll_option_id'];

    public function setCastByAttribute($value)
    {
        $this->attributes['cast_by'] = auth()->user()->member_id;
    }

}

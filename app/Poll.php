<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['agenda', 'option1', 'option2', 'option3', 'option4', 'published_by'];

    public function setPublishedByAttribute($value)
    {
//        $this->attributes['published_by'] = auth()->user()->member_id;
        $this->attributes['published_by'] = '5361';
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function getVotePercentage($option)
    {
        $percentage = 0;
        $total_votes = $this->votes->count();
        $op_vote =  $this->votes()->where('option', $option)->count();
        if($total_votes > 0){
            $percentage = $op_vote / $total_votes * 100;
        }
        return intval($percentage);
    }
}

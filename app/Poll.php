<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['agenda', 'published_by'];

    public function setPublishedByAttribute($value)
    {
//        TODO: Change published_by
//        $this->attributes['published_by'] = auth()->user()->member_id;
        $this->attributes['published_by'] = 'admin';
    }

    public function pollOptions()
    {
        return $this->hasMany(PollOption::class);
    }
    
    public function votes()
    {
        return $this->hasMany(Vote::class);
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

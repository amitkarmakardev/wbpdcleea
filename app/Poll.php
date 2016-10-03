<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['agenda', 'published_by'];

    public function setPublishedByAttribute($value)
    {
        $this->attributes['published_by'] = auth()->user()->member_id;
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

    public function publishedBy()
    {
        return $this->hasOne('App\Member', 'member_id', 'published_by');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $fillable = ['poll_id', 'option'];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function votePercentage()
    {
        $total_vote_for_poll = $this->poll->votes->count();
        $total_vote_for_poll = $total_vote_for_poll > 0 ? $total_vote_for_poll : 1;
        $vote_for_this_option = $this->votes->count();
        return intval($vote_for_this_option / $total_vote_for_poll * 100);
    }

}

<?php

namespace App\Repository;

use App\Poll;
use App\Vote;

class PollRepository{

    public function all()
    {
        return Poll::paginate(config('wbpdcleea.discussion.per_page'));
    }

    public function save($request)
    {
        Poll::create($request->all());
    }

    public function get($id)
    {
        return Poll::find($id);
    }

    public function activate($id)
    {
        $poll = $this->get($id);

        $poll->status = 'active';

        $poll->save();
    }

    public function deActivate($id)
    {
        $poll = $this->get($id);

        $poll->status = 'inactive';

        $poll->save();
    }

    public function vote($id, $option)
    {
//        TODO: set appropriate cast_by
        Vote::create(['poll_id' => $id, 'cast_by' => '5361', 'option' => $option]);
    }

}
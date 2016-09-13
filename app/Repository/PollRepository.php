<?php

namespace App\Repository;

use App\Poll;
use App\PollOption;
use App\Vote;

class PollRepository{

    public function all()
    {
        return Poll::paginate(config('wbpdcleea.discussion.per_page'));
    }

    public function save($request)
    {
        $poll_options = [];
        $data = Poll::create($request->all());
        foreach($request->get('option') as $option){
            $poll_options[] = new PollOption(['option' => $option]);
        }
        $data->pollOptions()->saveMany($poll_options);
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

    public function vote($id, $poll_option_id)
    {
//        TODO: set appropriate cast_by
        Vote::create(['poll_id' => $id, 'cast_by' => '', 'poll_option_id' => $poll_option_id]);
    }

}
<?php

namespace App\Repository;

use App\Discussion;
use App\Poll;

class SidebarInjector{

    public function getRecentDiscussions()
    {
        return Discussion::latest()->select(['id', 'subject'])->get()->take(config('wbpdcleea.sidebar.per_page'));
    }

    public function getPopularDiscussions()
    {
        return Discussion::orderBy('hit', 'desc')->select(['id', 'subject'])->get()->take(config('wbpdcleea.sidebar.per_page'));
    }

    public function getActivePolls()
    {
        return Poll::where('status', 'active')->orderBy('created_at', 'desc')->get();
    }

    public function getVotePercentage($poll_id, $poll_option_id)
    {

    }

}
<?php

namespace App\Repository;

use App\Issue;

class IssueRepository{

    public function all()
    {
        return Issue::where('status', 'pending')->paginate(config('wbpdcleea.issue.per_page'));
    }

    public function save($request)
    {
        Issue::create($request->all());
    }

    public function get($id)
    {
        return Issue::find($id);
    }
}
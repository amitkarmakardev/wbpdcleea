<?php

namespace App\Repository;

use App\Discussion;

class DiscussionRepository{

    public function all()
    {
        return Discussion::paginate(config('wbpdcleea.discussion.per_page'));
    }

    public function save($request)
    {
        Discussion::create($request->all());
    }

    public function get($id)
    {
        return Discussion::find($id);
    }
}
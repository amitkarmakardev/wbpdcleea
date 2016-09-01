<?php

namespace App\Repository;

use App\Comment;

class CommentRepository{

    public function all()
    {
        dd('Wrong method !!');
    }

    public function comment($request)
    {
        Comment::create($request->all());
    }

    public function get($id)
    {
        dd('Wrong method !!');
    }
}
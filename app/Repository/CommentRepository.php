<?php

namespace App\Repository;

use App\Comment;

class CommentRepository
{

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
        return Comment::find($id);
    }

    public function markProper($id)
    {
        $comment = $this->get($id);
        if ($comment->is_proper == 'improper') {
            $comment->is_proper = 'proper';
            $comment->marked_by = auth()->user()->member_id;
            $comment->save();
        }
    }

    public function markImproper($id)
    {
        $comment = $this->get($id);
        if ($comment->is_proper == 'proper') {
            $comment->is_proper = 'improper';
            $comment->marked_by = auth()->user()->member_id;
            $comment->save();
        }
    }
}
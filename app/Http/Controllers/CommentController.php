<?php

namespace App\Http\Controllers;

use App\Repository\CommentRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $repository;

    public function __construct(CommentRepository $repository)
    {
        $this->middleware('auth')->only('comment');
        $this->repository = $repository;
    }

    public function comment(Request $request)
    {
        $this->repository->comment($request);
        return redirect()->back();
    }

    public function markProper($id)
    {
        $this->repository->markProper($id);
        return redirect()->back();
    }

    public function markImproper($id)
    {
        $this->repository->markImproper($id);
        return redirect()->back();
    }
}

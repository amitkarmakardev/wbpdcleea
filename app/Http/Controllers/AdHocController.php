<?php

namespace App\Http\Controllers;

use App\Repository\CommentRepository;
use Illuminate\Http\Request;

class AdHocController extends Controller
{

    public function comment(Request $request, CommentRepository $commentRepository)
    {
        $commentRepository->comment($request);
        return redirect()->back();
    }


}

<?php

namespace App\Http\Controllers;

use App\Repository\PollRepository;
use Illuminate\Http\Request;

class PollController extends Controller
{

    public function index(PollRepository $pollRepository)
    {
        $data_list = $pollRepository->all();
        return view('poll.index', compact('data_list'));
    }

    public function create()
    {
        return view('poll.create');
    }

    public function show($id, PollRepository $pollRepository)
    {
        $data = $pollRepository->get($id);
        return view('poll.show', compact('data'));
    }

    public function store(Request $request, PollRepository $pollRepository)
    {
        $pollRepository->save($request);
        return redirect()->to(url('poll'));
    }

    public function activate($id, PollRepository $pollRepository)
    {
        $pollRepository->activate($id);
        return redirect()->back();
    }

    public function deActivate($id, PollRepository $pollRepository)
    {
        $pollRepository->deActivate($id);
        return redirect()->back();
    }

    public function vote($id, $option, PollRepository $pollRepository)
    {
        $pollRepository->vote($id, $option);
        return redirect()->back();
    }
}

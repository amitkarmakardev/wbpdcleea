<?php

namespace App\Http\Controllers;

use App\Repository\PollRepository;
use Illuminate\Http\Request;

class PollController extends Controller
{
    protected $repository;
    
    public function __construct(PollRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        $data_list = $this->repository->all();
        return view('poll.index', compact('data_list'));
    }

    public function create()
    {
        return view('poll.create');
    }

    public function show($id)
    {
        $data = $this->repository->get($id);
        return view('poll.show', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, config('wbpdcleea.poll.validation_rules'));
        $this->repository->save($request);
        return redirect()->to(url('poll'));
    }

    public function activate($id)
    {
        $this->repository->activate($id);
        return redirect()->back();
    }

    public function deActivate($id)
    {
        $this->repository->deActivate($id);
        return redirect()->back();
    }

    public function vote($id, $poll_option_id)
    {
        $this->repository->vote($id, $poll_option_id);
        return redirect()->back();
    }
}

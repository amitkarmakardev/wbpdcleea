<?php

namespace App\Http\Controllers;

use App\Repository\MemberRepository;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    protected $repository;

    public function __construct(MemberRepository $repository)
    {
        $this->middleware('auth');
        $this->middleware('check-authority:view,member')->only(['index', 'show', 'changePassword']);
        $this->middleware('check-authority:create,member')->only(['create', 'store', 'edit', 'update', 'resetPassword']);
        $this->repository = $repository;
    }

    public function index()
    {
        $data_list = $this->repository->all();
        return view('member.index', compact('module', 'data_list'));
    }

    public function create()
    {
        return view('member.create');
    }

    public function edit($id)
    {
        $data = $this->repository->get($id);
        return view('member.edit', compact('data'));
    }

    public function show($id)
    {
        $data = $this->repository->get($id);
        return view('member.show', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, config('wbpdcleea.member.validation_rules'));
        $this->repository->save($request);
        return redirect()->to(url('member'));
    }

    public function update(Request $request, $id)
    {
        $this->repository->update($id, $request);
        return redirect()->to(url('member', $id));
    }

    public function resetPassword($id)
    {
        $this->repository->resetPassword($id);
        return redirect()->to(url('member', $id));
    }

    public function showChangePasswordForm()
    {
        $data = auth()->user()->member;
        return view('member.password', compact('data'));
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, config('wbpdcleea.user.change_password_validation_rules'));
        $status = $this->repository->changePassword($request);
        if ($status) {
            $message = 'Password changed successfully';
            auth()->logout();
        } else {
            $message = 'Invalid existing password';
        }
        return redirect()->back()->withErrors(compact('message'));
    }
}

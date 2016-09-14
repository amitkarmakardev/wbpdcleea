<?php

namespace App\Http\Controllers;

use App\Repository\MemberRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class MemberController extends Controller
{

    public function index($module, MemberRepository $repository)
    {
        $data_list = $repository->all();
        return view($module.'.index', compact('module', 'data_list'));
    }

    public function create()
    {
        return view('member.create');
    }

    public function show($id, MemberRepository $repository)
    {
        $data = $repository->get($id);
        return view('member.show', compact('data'));
    }

    public function store(Request $request, MemberRepository $repository)
    {
        $repository->save($request);
        return redirect()->to(url('member'));
    }

    public function update(Request $request, $id, MemberRepository $repository)
    {
        $repository->update($id, $request);
        return redirect()->to(url('member', $id));
    }
}

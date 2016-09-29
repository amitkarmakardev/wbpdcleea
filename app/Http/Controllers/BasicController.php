<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BasicController extends Controller
{
    protected $repository;

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
        $module = Route::current()->getParameter('module');
        $this->repository = app(config('wbpdcleea.'.$module.'.repository'));
    }

    public function index($module)
    {
        $data_list = $this->repository->all();
        return view($module.'.index', compact('module', 'data_list'));
    }

    public function create($module)
    {
        return view($module.'.create', compact('module'));
    }

    public function show($module, $id)
    {
        $data = $this->repository->get($id);
        return view($module.'.show', compact('data', 'module'));
    }

    public function store(Request $request, $module)
    {
        $this->validate($request, config('wbpdcleea.'.$module.'.validation_rules'));
        $this->repository->save($request);
        return redirect()->to(url($module));
    }

}

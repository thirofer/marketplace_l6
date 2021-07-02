<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class StoreController extends Controller
{
    use UploadTrait;
    public function __construct()
    {
        //$this->middleware('user.has.store')->only('create','store');
    }
    public function index()
    {

        $store = auth()->user()->store;

        return view('admin.stores.index', compact('store'));
    }
    public function create()
    {
        $users = \App\Models\User::all(['id', 'name']);

        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $user=auth()->user()->name();


        if($request -> hasFile('logo')){
            $data['logo'] = $this->imageUpload($request->file('logo'));
        }

        $store = $user->store()->create($data);
        $store = $user->store()->create($data);

        flash('Loja criada com sucesso!')->success();
        return redirect ()->route('admin.stores.index');
    }

    public function edit ($store)
    {
        $store = \App\Models\Store::find($store);
        $users = \App\Models\User::all();

        return view('admin.stores.edit', compact('store', 'users'));

    }
        public function update (StoreRequest $request, $store)
    {
        $data = $request->all();

        $store = \App\Models\Store::find($store);

        $data['logo'] = $this->imageUpload($request->file('logo'));


        flash('Loja atualizada com sucesso!')->success();
        return redirect ()->route('admin.stores.index');
    }

    public function destroy($store)
    {
            $store = \App\Models\Store::find($store);
            $store->delete();

        flash('Loja removida com sucesso!')->success();
        return redirect ()->route('admin.stores.index');
    }




}

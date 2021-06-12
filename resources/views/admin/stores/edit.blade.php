@extends('admin.layouts.app')

@section('content')
<h2>Atualizar Loja</h2>
<form action="{route('admin.stores.update')}" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <label>Loja</label>
        <input type="text" name="name" class="form-control" value="{{$store->name}}">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value="{{$store->description}}">
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
    </div>
    <div class="form-group">
        <label>Celular/Whatsapp</label>
        <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
    </div>
    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
    </div>
    <div class="form-group">
        <label>Usuário</label>
        <select name="user" class="form-control">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <br><br>
    <div >
        <button class="btn btn-success" type="submit" style="float:right;">Editar Loja</button>
    </div>
</form>
@endsection
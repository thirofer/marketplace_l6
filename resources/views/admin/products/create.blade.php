@extends('admin.layouts.app')

@section('content')

    <form action="{route('admin.products.create')}" method="get">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label>Produto</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <input type="text" name="body" class="form-control">
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label>Lojas</label>
            <select name="store" class="form-control">
                @foreach($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div >
            <button class="btn btn-success" type="submit" style="float:right;">Criar Produto</button>
        </div>
    </form>

@endsection


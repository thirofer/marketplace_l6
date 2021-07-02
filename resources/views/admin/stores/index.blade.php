@extends('admin.layouts.app')
@section('content')
    @if(!$store)
    <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar loja</a>
    @else
    <table class="table table-stripped">
        <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Total de produtos</th>
            <th>Valor total</th>
            <th></th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->products->count()}}</td>
                <td>R$ </td>
                <td></td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store'=>$store->id])}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('admin.stores.destroy', ['store'=>$store->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>
                </td>
            </tr>
        </tbody>
    </table>
    @endif
@endsection

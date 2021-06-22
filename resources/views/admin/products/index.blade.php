@extends('admin.layouts.app')
@section('content')
    <a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
    <table class="table table-stripped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Loja</th>
            <th></th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->store->name}}</td>
                <td></td>
                <td>R$ {{number_format($p->price, 2, ',', '.')}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.products.edit', ['product'=>$p->id])}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('admin.products.destroy', ['product'=>$p->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                        </form>

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    {{$products->links()}}
@endsection

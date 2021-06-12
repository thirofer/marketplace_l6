@extends('admin.layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)

                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->price}}</td>
                    <td>
                        <a href="{{route('admin.products.edit', ['product' =>$p->id] )}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('admin.products.destroy', ['product' =>$p->id] )}}" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}
@endsection
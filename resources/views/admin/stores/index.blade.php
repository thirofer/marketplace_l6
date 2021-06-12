@extends('admin.layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)

                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}}</td>
                    <td></td>
                    <td>
                        <a href="{{route('admin.stores.edit', ['store' =>$store->id] )}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('admin.stores.destroy', ['store' =>$store->id] )}}" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$stores->links()}}
@endsection
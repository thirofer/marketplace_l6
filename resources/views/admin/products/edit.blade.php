@extends('admin.layouts.app')

@section('content')
<h2>Atualizar Produto</h2>
<form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <label>Produto</label>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value="{{$product->description}}">
    </div>
    <div class="form-group">
        <label>Conteúdo</label>
        <input type="text" name="body" class="form-control" value="{{$product->body}}">
    </div>
    <div class="form-group">
        <label>Preço</label>
        <input type="text" name="price" class="form-control" value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
    </div>
    <br><br>
    <div >
        <button class="btn btn-success" type="submit" style="float:right;">Editar Produto</button>
    </div>
</form>
@endsection
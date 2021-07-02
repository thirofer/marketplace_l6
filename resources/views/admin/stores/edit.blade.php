@extends('admin.layouts.app')
@section('content')
    <h1>Atualizar Loja</h1>
    <form action="{{route('admin.stores.update', ['store'=>$store->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="">Nome loja</label>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="description"class="form-control" value="{{$store->description}}">
        </div>
        <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" name="phone"class="form-control" value="{{$store->phone}}">
        </div>
        <div class="form-group">
            <label for="">Celular/Whatsapp</label>
            <input type="text" name="mobile_phone"class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">


        <label>Fotos do da Loja</label>
        <input type="file" name="logo" class="form-control  @error('logo') is-invalid @enderror">
        @error('logo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror

        <br>

        <div>
            <button type="submit" class="btn btn-success">Atualizar Loja</button>
        </div>

    </form>

@endsection

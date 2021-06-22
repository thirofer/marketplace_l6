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
            <label>Fotos da loja</label>
            <input type="file" name="photos[]" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Slug</label>
            <input type="text" name="slug"class="form-control" value="{{$store->slug}}">
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-success">Atualizar Loja</button>
        </div>

    </form>

{{--    <hr>--}}
{{--    <div class="row">--}}
{{--        @foreach($product->photos as $photo)--}}
{{--            <div class="col-4 text-center">--}}
{{--                <img src="{{asset('storage/' . $photo->image)}}" alt="" class="img-fluid">--}}
{{--                <form action="{{route('admin.photo.remove')}}" method="post">--}}
{{--                    @csrf--}}

{{--                    <input type="hidden" name="photoName" value="{{$photo->image}}">--}}
{{--                    <button type="submit" class="btn btn-danger">Remover</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

@endsection

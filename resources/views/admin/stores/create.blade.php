@extends('admin.layouts.app')

@section('content')

<h2>Criar Loja</h2>
@if(!$store)
    <form action="{{route('admin.stores.store')}}" method="post">
@endif
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label>Loja</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback">
                    <h6>{{$message}}</h6>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
            @error('description')
                <div class="invalid-feedback">
                    <h6>{{$message}}</h6>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
            @error('phone')
                <div class="invalid-feedback">
                    <h6>{{$message}}</h6>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Celular/Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}">
            @error('mobile_phone')
                <div class="invalid-feedback">
                    <h6>{{$message}}</h6>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
        </div>
        <div class="form-group">
            <label>Usuário</label>
            <select name="user" class="form-control" disabled>
                <option primary>{{auth()->user()->name}}</option>
            </select>
        </div>
        <br>
        <div>
                <button class="btn btn-success" type="submit" style="float:right;">Criar Loja</button>
        </div>
    </form>

@endsection


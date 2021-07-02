@extends('admin.layouts.front')

@section('content')
    @foreach($products as $product)
    <div class="card">
        @if($product->photos->count())
            <img src="" alt="{{asset('storage/' . $product->photos->first()->image)}}" class="card-img-top">
        @endif
        <div class="card-body">
            <h2 class="card-title">{{$product->name}}</h2>
            <p class="card-text">
                {{$product->description}}
            </p>
        </div>
    </div>
    @endforeach
@endsection
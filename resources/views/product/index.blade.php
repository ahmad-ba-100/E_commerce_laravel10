@extends('layout.master')

@section('content')
@foreach($product as $products)
<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h6 class="mb-0">{{$products->title}}</h6>
            <div class="mb-1 text-muted">{{$products->created_at->format('d/m/y')}}</div>
            <p class="mb-auto">{{$products->subtitle}}</p>
            <strong class="mb-auto">{{$products->getPrice()}}</strong>
            <a href="{{route('product.show',$products->slug)}}" class="stretched-link btn btn-primary">Voir plus</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{$products->image}}" alt="">

        </div>
    </div>
</div>
@endforeach


@endsection
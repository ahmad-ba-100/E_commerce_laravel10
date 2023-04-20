@extends('layout.master')

@section('content')
<div class="col-md-12">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design </strong>
            <h6 class="mb-0">{{$products->title}}</h6>
            <div class="mb-1 text-muted">{{$products->created_at->format('d/m/y')}}</div>
            <p class="mb-auto">{{$products->description}}</p>
            <strong class="mb-auto">{{$products->getPrice()}}</strong>
            <form action="{{route('cart.store')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$products->id}}">
                <input type="hidden" name="title" value="{{$products->title}}">
                <input type="hidden" name="price" value="{{$products->price}}">
                <button type="submit" class="btn btn-dark">Ajouter au panier</button>

            </form>

        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="{{$products->image}}" alt="">

        </div>
    </div>
</div>

@endsection
@extends('master')
@section('content')
<div class="custom-prduct">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Cart Products</h3>
            @foreach ($products as $item)
                <div class="row searched-item cart-list-divider mb-3 pb-3">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-image" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                            <div class="">
                                <h2>{{ $item->name }}</h2>
                                <h5 class="text-truncate">{{ $item->description }}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart{{ $item->cart_id }}" class="btn btn-warning">Remove from cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

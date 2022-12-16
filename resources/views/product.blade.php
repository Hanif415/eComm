@extends('master')
@section('content')
<div class="">
    <div class="row">
        <div class="col mx-auto custom-product">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($products as $item)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $item['id'] }}" class=" {{ $item['id'] == 1 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <img class="d-block w-100 slider-img" src="{{ $item['gallery'] }}">
                            <div class="carousel-caption d-none d-md-block slider-text">
                                <h5>{{ $item['name'] }}</h5>
                                <p class="text-truncate">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="trending-wrapper">
                <h3>Trending Products</h3>
                @foreach ($products as $item)
                    <div class="trending-item">
                        <img class="trending-image" src="{{ $item['gallery'] }}">
                        <div class="">
                            <h5>{{ $item['name'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
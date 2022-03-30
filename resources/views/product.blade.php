@extends('master')
@section('content')
    <div class="custom-product">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($products as $items)
                    <div class="carousel-item {{ $items['id'] == 1 ? 'active' : '' }}">
                        <img class="slider-img" src="{{ $items['gallery'] }}" alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                            <div class="cc">
                                <h5 style="color:black;">{{ $items['name'] }} </h5>
                                <p style="color:black;">Price: Rs {{ $items['price'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="custom-product">

        <div class="trending-wrapper">
            <h3>Trending on S-Mart</h3>
                @foreach ($products as $items)
                    <div class="trending-items">
                        <img class="trending-img" src="{{ $items['gallery'] }}" alt="First slide">
                        <div class="" style="margin-top: 3rem;">
                            <div class="">
                                <p style="color:black;">{{ $items['name'] }} </p>
                                {{-- <p style="color:black;">Price: Rs {{ $items['price'] }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection

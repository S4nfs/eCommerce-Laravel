@extends('master')
@section('content')
    <div class="custom-product1">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="">
                        <img class="slider-img"
                            src="https://www.bigbasket.com/media/uploads/banner_images/hp_f_v_m_summerveggies_460-250322.jpg"
                            alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="slider-img"
                            src="https://www.bigbasket.com/media/uploads/banner_images/hp_m_Pantryessentials_460-250322.jpg"
                            alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="slider-img"
                            src="https://www.bigbasket.com/media/uploads/banner_images/hp_fom_m_bbpl-staples_460_040222_Bangalore.jpg"
                            alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="slider-img"
                            src="https://www.bigbasket.com/media/uploads/banner_images/hp_m_TheBigGlasswareMela!_460-250322.jpg"
                            alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="slider-img"
                            src="https://www.bigbasket.com/media/uploads/banner_images/HP_EMF_M_Weekdayblore_460_040422.jpeg"
                            alt="First slide">
                        <div class="carousel-caption" style="margin-top: 3rem;">
                        </div>
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="custom-product1">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($products as $items)
                    <div class="carousel-item {{ $items['id'] == 1 ? 'active' : '' }}">
                        <a href="detail/{{ $items['id'] }}">
                            <img class="slider-img" src="{{ $items['gallery'] }}" alt="First slide">
                            <div class="carousel-caption" style="margin-top: 3rem;">
                                <div class="cc">
                                    <h5 style="color:black;">{{ $items['name'] }} </h5>
                                    <p style="color:black;">Price: Rs {{ $items['price'] }}</p>
                                </div>
                            </div>
                        </a>
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
    <div class="custom-product trend">

        <div class="trending-wrapper">
            <h3>Trending on S-Mart <span class="badge bg-dark">new</span></h3>
            @foreach ($products as $items)
                <div class="trending-items">
                    <div class="trendtile">
                        <a href="detail/{{ $items['id'] }}">
                            <img class="trending-img" src="{{ $items['gallery'] }}" alt="First slide">
                            <div class="" style="margin-top: 3rem;">
                                <div class="trendtilename">
                                    <p style="color:black;">{{ $items['name'] }} </p>
                                    {{-- <p style="color:black;">Price: Rs {{ $items['price'] }}</p> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="trendbtn">
                        <a href="/detail/{{ $items['id'] }}" class="btn btn-warning">Add</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

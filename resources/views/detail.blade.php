@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Return to Home</a>
                <h2>{{ $product['name'] }}</h2>
                <h3>Rs. {{ $product['price'] }}</h3>
                <p>Category - {{ $product['category'] }}</p>
                <p>Description - {{ $product['description'] }}</p>
                {{-- <p>{{session()->get('user')}}</p> --}}
                <br>

                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button type="submit" class="btn btn-warning"><i class="bi bi-cart"></i> Add To Cart</button>
                </form><br>
                <button class="btn btn-dark">Buy Now</button><br><br>
                <p><i>(Inclusive of all taxes)</i></p>
            </div>
        </div>
    </div>
@endsection

@extends('master')
@section('content')

@if($products->count() > 0)
    <div class="custom-product">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($products as $items)
                <tr>
                    {{-- <th scope="row">1</th> --}}
                    <td><img class="trending-img" src="{{ $items->gallery }}"></td>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->description }}</td>
                    <td>Rs. {{ $items->price }}</td>
                    <td colspan="2"><a href="/removecart/{{ $items->cart_id }}" class="btn btn-warning">Remove to Cart</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-md-auto">
                </div>
                <div class="col col-lg-2">
                    <a href="checkout"><button type="button" class="btn btn-dark">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
@else
<div class="container-fluid mt-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3">
                        <h3><strong>Your Cart is Empty</strong></h3>
                        <h4>Add something to make us happy :)</h4> <a href="/" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

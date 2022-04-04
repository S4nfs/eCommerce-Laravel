@extends('master')
@section('content')
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
                    1 of 3
                </div>
                <div class="col-md-auto">
                    Variable width content
                </div>
                <div class="col col-lg-2">
                    <a href="checkout"><button type="button" class="btn btn-success">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

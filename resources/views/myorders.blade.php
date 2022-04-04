@extends('master')
@section('content')
    <div class="custom-product">
        <h2>My Orders</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($fetchOrders as $items)
                <tr>
                    {{-- <th scope="row">1</th> --}}
                    <td><img class="trending-img" src="{{ $items->gallery }}"></td>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->description }}</td>
                    <td>Rs. {{ $items->price }}</td>
                    <td style="color: green;">{{ $items->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

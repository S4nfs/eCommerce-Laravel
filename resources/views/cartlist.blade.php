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
            </tr>
        </thead>

        @foreach ($products as $items)
            <tr>
                <th scope="row">1</th>
                <td><img class="trending-img" src="{{ $items->gallery }}"></td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->description }}</td>
                <td>Rs. {{ $items->price }}</td>
                <td colspan="2"><button type="button" class="btn btn-warning">Remove</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

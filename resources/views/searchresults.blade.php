@extends('master')
@section('content')

@if($sproducts->count() > 0)
    <div class="custom-product">

        <table class="table table-hover">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>

            @foreach ($sproducts as $items)
                <tr>
                    <td><img class="trending-img" src="{{ $items->gallery }}"></td>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->category }}</td>
                    <td>Rs. {{ $items->description }}</td>
                    <td colspan="2"><a href="/detail/{{ $items->id }}" class="btn btn-warning">View Product</a>
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
                        <div class="col-sm-12 empty-cart-cls text-center"> <i class="bi bi-emoji-dizzy" style="width: 5rem; height: auto;"></i>
                            <h3><strong>No Results Found</strong></h3>
                            <h4>Add something to make us happy :)</h4> <a href="/" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>@endif
@endsection
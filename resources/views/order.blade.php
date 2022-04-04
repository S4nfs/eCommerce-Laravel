@extends('master')
@section('content')
    <div class="">
        <div class="container1 d-lg-flex">
            <div class="box-1 bg-light user">
                <div class="d-flex align-items-center mb-3"> <img
                        src="https://avatars.githubusercontent.com/u/75138345?v=4"
                        class="pic rounded-circle" alt="">
                    <h2 class="ps-2 name">{{Session()->get('user')[0]->name}}</h2>
                </div>
                <div class="box-inner-1 pb-3 mb-3 ">
                    <div class="d-flex justify-content-between mb-3 userdetails">
                        <p class="fw-bold">Subtotal</p>
                        <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>{{ $total }}</p>
                    </div>
                    <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button> <button
                                type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="width: 100%;
                                                height: 200px">
                            @foreach ($productShowcase as $item)
                                <div class="carousel-item {{ $item->id == 1 ? 'active' : '' }}"><img
                                        src="{{ $item->gallery }}" class="d-block w-100">
                                </div>
                            @endforeach
                        </div><br><br>
                        @foreach ($productShowcase as $details)
                            <div class="d-flex justify-content-between mb-3">
                                <ul>
                                    <li><span class="">{{ $details->name }}
                                            Rs.{{ $details->price }}</span></li>
                                </ul>
                            </div>
                        @endforeach
                        <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                            <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span
                                class="visually-hidden">Previous</span>
                        </button> <button class="carousel-control-next" type="button" data-bs-target="#my"
                            data-bs-slide="next">
                            <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span
                                class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="dis my-3 info"></p>
                </div>
            </div>
            <div class="box-2">
                <div class="box-inner-2">
                    <div>
                        <p class="fw-bold">Payment Details</p>
                        <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                    </div>
                    <form action="/orderplace" method="POST">
                        @csrf
                        <div class="mb-3">
                            <p class="dis fw-bold mb-2">Email address</p> <input class="form-control" type="email"
                                value="{{ Session::get('user')[0]->email }}" placeholder="Email Address">
                        </div>
                        <div>
                            <p class="dis fw-bold mb-2">Card details</p>
                            <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                                <div class="fab fa-cc-visa ps-3"></div> <input type="text" class="form-control"
                                    placeholder="Card Details">
                                <div class="d-flex w-50"> <input type="text" class="form-control px-0"
                                        placeholder="MM/YY">
                                    <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                                </div>
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2">Card holder</p> <input class="form-control" type="text"
                                    value="{{ Session::get('user')[0]->name }}">
                            </div>
                            <div class="address">
                                <p class="dis fw-bold mb-3">Billing address</p> <select class="form-select"
                                    aria-label="Default select example" name="country" required>
                                    <option selected value="us">United States</option>
                                    <option value="in">India</option>
                                    <option value="aus">Australia</option>
                                    <option value="ca">Canada</option>
                                </select>
                                <div class="d-flex"> <input class="form-control zip" type="text" placeholder="ZIP"
                                        name="zipcode" required>
                                    <input class="form-control state" type="text" placeholder="State" name="state" required>
                                </div>
                                <div class="my-3 cardname">
                                    <p class="dis fw-bold mb-2"></p> <input class="form-control" type="text"
                                        name="address" placeholder="Address" required>
                                </div>
                                <div class=" my-3">
                                    <p class="dis fw-bold mb-2">VAT Number</p>
                                    <div class="inputWithcheck"> <input class="form-control" type="text"
                                            value="GB012345B9">
                                        <span class="fas fa-check"></span>
                                    </div>
                                </div>
                                <div class="my-3">
                                    <p class="dis fw-bold mb-2">Discount Code</p> <input class="form-control text-uppercase"
                                        type="text" value="S4NFS" id="discount">
                                </div>
                                <div class="d-flex flex-column dis">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>Subtotal</p>
                                        <p><span class="fas fa-dollar-sign"></span>{{ $total }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="d-flex align-items-center">
                                            <p class="pe-2">Discount(10%) <span
                                                    class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode">
                                                    <span id="code" class="pe-2"></span><span
                                                        class="fas fa-times close"></span></span></p>
                                        </div>
                                        <p><span class="fas fa-dollar-sign"></span> {{ $d = ($total * 10) / 100 }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p>VAT<span>(20%)</span></p>
                                        <p><span class="fas fa-dollar-sign"></span>{{ $v = ($total * 20) / 100 }}</p>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <p class="fw-bold">Total</p>
                                        <p class="fw-bold"><span
                                                class="fas fa-dollar-sign"></span>{{ $total - $d + $v }}
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Pay<span
                                            class="fas fa-dollar-sign px-1"></span>{{ $total - $d + $v }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

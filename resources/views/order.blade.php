@extends('master')
@section('content')
    {{-- <div class="custom-product"> --}}
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3"> <img
                    src="https://images.pexels.com/photos/4925916/pexels-photo-4925916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    class="pic rounded-circle" alt="">
                <p class="ps-2 name">Oliur</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Your Cart</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>{{ $total }}</p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button"
                            data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img
                                src="https://images.pexels.com/photos/356056/pexels-photo-356056.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                class="d-block w-100"> </div>
                        <div class="carousel-item"> <img
                                src="https://images.pexels.com/photos/270694/pexels-photo-270694.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                class="d-block w-100"> </div>
                        <div class="carousel-item"> <img
                                src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                class="d-block w-100"> </div>
                    </div> <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span
                            class="visually-hidden">Previous</span>
                    </button> <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span
                            class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis my-3 info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quos ipsa
                    sed
                    officiis odio libero consectetur placeat dignissimos et ab dolorum, nemo id provident quidem modi,
                    dolorem dolores quas quasi. </p>
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
                            <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY">
                                <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                            </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Card holder</p> <input class="form-control" type="text"
                                value="{{ Session::get('user')[0]->name }}">
                        </div>
                        <div class="address">
                            <p class="dis fw-bold mb-3">Billing address</p> <select class="form-select"
                                aria-label="Default select example" name="country">
                                <option selected value="us">United States</option>
                                <option value="in">India</option>
                                <option value="aus">Australia</option>
                                <option value="ca">Canada</option>
                            </select>
                            <div class="d-flex"> <input class="form-control zip" type="text" placeholder="ZIP"
                                    name="zipcode">
                                <input class="form-control state" type="text" placeholder="State" name="state">
                            </div>
                            <div class="my-3 cardname">
                                <p class="dis fw-bold mb-2"></p> <input class="form-control" type="text" name="address"
                                    placeholder="Address" required>
                            </div>
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">VAT Number</p>
                                <div class="inputWithcheck"> <input class="form-control" type="text" value="GB012345B9">
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
                                <button type="submit" class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>{{ $total - $d + $v }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        //check if discount code is equal to s4nfs make code element green otherwise make it red
        var discount = document.getElementById("discount");
        discount.addEventListener('onkeyup', function(e) {
            var code = e.target.value;
            if (code == 's4nfs') {
                e.target.style.color = 'green';
                //change $d value
                // @php
                // $d = 10 / 100;
                // @endphp
            } else {
                e.target.style.color = 'red';
                // @php
                // $d = 0;
                // @endphp
            }
        });
    </script> --}}
@endsection

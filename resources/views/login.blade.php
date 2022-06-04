@extends('master')
@section('content')
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Be S-Mart while buying the best groceries <br />
                        <span style="color: hsl(218, 81%, 75%)">for your kitchen</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        A wide range of every staple and international cuisine product to meet your needs along with organic
                        products for fresh and packaged food items. With our offerings, we have the best online food shop &
                        online grocery shopping platform available for all your grocery products as well as physical grocery
                        stores in selected cities.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <form action="/login" method="post">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">Full Name</label>
                                            <input type="text" id="form3Example1" class="form-control" name="name" required/>
                                        </div>
                                    </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="email" id="form3Example3" class="form-control" name="email" required/>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4">Password</label>
                                    <input type="password" id="form3Example4" class="form-control" name="password" required/>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                        checked />
                                    <label class="form-check-label" for="form2Example33">
                                        Subscribe to our newsletter
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Login
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or sign up with:</p>
                                    {{-- <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button> --}}

                                    <a href="/auth/google/redirect" class="btn btn-primary btn-block mb-4 mx-4">
                                        <i class="bi bi-google"></i>
                                    </a>
{{-- 
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button> --}}

                                    <a href="/auth/github/redirect" class="btn btn-primary btn-block mb-4 mx-4">
                                        <i class="bi bi-github"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
@endsection

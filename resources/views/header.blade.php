<?php
use App\Http\Controllers\ProductController;

$total = 0;
if(Session::has('user')){

    $total = ProductController::countCartItem();
}


?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">S-Mart</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Browse</a>
                </li>
                @if(Session::has('user'))
                <li class="nav-item">
                    <a class="nav-link" href="/ordernow">Orders</a>
                </li>
                @endif
                <form class="d-flex" style="width: 50vw; margin-left: 1rem;" method="GET" action="/search">
                    <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="search">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if(Session::has('user'))
                <li><a class="nav-link" href="/cartlist">Cart({{$total}})</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle godown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Hi, {{Session::get('user')[0]->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/profile">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                  </li>
                  @else
                  <li><a class="nav-link" href="/login">Login</a></li>
                  <li><a class="nav-link" href="/register">Register</a></li>
                  @endif
            </ul>
        </div>
    </div>
</nav>

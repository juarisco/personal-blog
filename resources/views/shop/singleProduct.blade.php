@extends('layouts.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                <h1>{{ $product->title }}</h1>
                {{-- <span class="subheading">Super cool t-shirts</span> --}}
                </div>
            </div>
            </div>
        </div>
    </header>  
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($product->thumbnail) }}" alt="">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->title }}</h2>
                <hr>
                {{ $product->description }}
                <hr>
                <b>${{ $product->price }} USD</b>
                <br>
                <a href="" class="btn btn-primary">Checkout with PayPal</a>
            </div>
        </div>
    </div>

@endsection
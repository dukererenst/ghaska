<link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/cart.css')}}'/>
<link rel="stylesheet" type="text/css" href='{{asset('public/css/frontend/tabbular.css')}}'/>
@extends('layouts.frontend')
@section('title')
Contact Us
@endsection
@section('content')
<div class="container">
    <!--recently view item-->
    <div class="row">
        <h2 class="text-primary"> Current Executives</h2>
        <div class="divider"></div>
        <div class="flip-3d">
            <figure>
               <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image">
                <figcaption>
                    <h4 class="text-white">Floral Printed Saree</h4>
                    <ul class="hidden-xs">
                        <li>Product Type - Women's Saree</li>
                        <li>Color - Multi Colour</li>
                    </ul>
                    <h4 class="text-white hidden-xs"><del class="text-danger">Rs. 1599.00</del>  Rs. 1198.00   </h4>
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <a href="single_product.html" class="btn btn-primary text-white">View</a></div>
        </div>
        <div class="flip-3d">
            <figure>
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image">
                <figcaption>
                    <h4 class="text-white">Floral Printed Saree</h4>
                    <ul class="hidden-xs">
                        <li>Product Type - Women's Saree</li>
                        <li>Color - Multi Colour</li>
                    </ul>
                    <h4 class="text-white hidden-xs"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <a href="single_product.html" class="btn btn-primary text-white">View</a></div>
        </div>
        <div class="flip-3d">
            <figure>
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image">
                <figcaption>
                    <h4 class="text-white">Floral Printed Saree</h4>
                    <ul class="hidden-xs">
                        <li>Product Type - Women's Saree</li>
                        <li>Color - Multi Colour</li>
                    </ul>
                    <h4 class="text-white hidden-xs"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <a href="single_product.html" class="btn btn-primary text-white">View</a></div>
        </div>
        <div class="flip-3d">
            <figure>
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image">
                <figcaption>
                    <h4 class="text-white">Floral Printed Saree</h4>
                    <ul class="hidden-xs">
                        <li>Product Type - Women's Saree</li>
                        <li>Color - Multi Colour</li>
                    </ul>
                    <h4 class="text-white hidden-xs"><del class="text-danger">Rs. 1999.00</del> Rs. 1499.00</h4>
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <a href="single_product.html" class="btn btn-primary text-white">View</a></div>
        </div>
    </div>
</div>
@endsection

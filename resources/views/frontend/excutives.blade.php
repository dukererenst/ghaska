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
        <h3 class="text-primary"> Current Executives</h3>
        <div class="divider"></div>
        @foreach($executives as $executive)
        <div class="flip-3d col-md-3">
            <figure>
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image" class="img img-responsive">
                <figcaption>
                    <h3 class="text-white">{{$executive->full_name}}</h3>
                    <ul class="hidden-xs text-white">
                        <li>Institution : {{$executive->institution}}</li>
                        <li>Program : {{$executive->program}}</li>
                        <li>Email : {{$executive->email_address}}</li>
                        <li>Phone : {{$executive->telephone}}</li>
                    </ul>
                  
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <h3>{{$executive->position}}</h3>
            </div>
        </div>
        @endforeach


    </div>
    <div class="row">
        <h3 class="text-primary"> Regional Executives</h3>
        <div class="divider"></div>
        @foreach($regionalReps as $rep)
        <div class="col-md-3 flip-3d">
            <figure>
                <img src='{{asset('public/img/ghaska-logo-small.png')}}' alt="product image" class="img img-responsive">
                <figcaption>
                    <h3 class="text-white">{{$rep->full_name}}</h3>
                    <ul class="hidden-xs text-white">
                        <li>Program : {{$rep->program}}</li>
                        <li>Email : {{$rep->email_address}}</li>
                        <li>Phone : {{$rep->telephone}}</li>
                    </ul>
                  
                </figcaption>
            </figure>
            <div class="text-center mart10">
                <h3>{{$rep->regionName}}</h3>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection

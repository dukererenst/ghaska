@extends('layouts.frontend')
@section('title')
Gallery
@endsection
@section('content')
<div class="container">
     <h3 class="text-primary">Galleries</h3>
        <div class="divider"></div>
    <div class="row">
        @foreach($galleryGroup as $group)
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-3 gallery-border">
                    <a class="fancybox-effects-a" href='{{route('gallery.show',$group->id)}}' title='{{$group->group_name}}'>
                <img src='{{asset('public/gallery/'.$group->picture_name)}}' class="img-responsive gallery-style" alt="Image">
                </a>
                <p class="text-left text-big3">
                    {{$group->group_name}}
                </p>
        </div>
        @endforeach
    </div>
</div>
@endsection
@extends('layouts.frontend')
@section('title')
Gallery
@endsection
@section('content')
<div class="container">
     <h3 class="text-primary">Galleries</h3>
        <div class="divider"></div>
    <div class="row">
        @foreach($galleryList as $group)
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-3 gallery-border">
                    <a class="fancybox-effects-a" href='#' title='{{$group->group_name}}'>
                <img src='{{asset('public/gallery/'.$group->gallery_group.'/'.$group->picture_name)}}' class="img-responsive gallery-style" alt="Image">
                </a>
              
        </div>
        @endforeach
    </div>
        {{$galleryList->links()}}
</div>
@endsection
@extends('layouts.admin')

@section('title')
Blog Details
@endsection
@section('content')
<div class="row">
    <div class="col-sm-8 col-md-9 col-full-width-right">
        <div class="blog-detail-image">
            <img src='{{asset('blogs/pictures/'.$blog->feature_image)}}' data-src='{{asset('blogs/pictures/'.$blog->feature_image)}}' class="img-responsive" alt='{{$blog->blog_title}}'>
        </div>
        <!-- /.blog-detail-image -->
        <div class="the-box no-border blog-detail-content">
            <p>
                <span class="label label-danger square">{{$blog->created_at->diffForHumans()}}</span>
            </p>
           <?php
              echo $blog->blog_content
           ?>

        </div>
        <!-- /the.box .no-border -->
    </div>
</div>
@endsection
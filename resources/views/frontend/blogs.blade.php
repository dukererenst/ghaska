@extends('layouts.frontend')

@section('content')

<div class="container">
    <h2>Blog</h2>
    <div class="row">
        <div class="content">

            <div class="col-md-8">
                <!-- BEGIN FEATURED POST -->
                @foreach($blogs as $blog)
                <div class="featured-post-wide thumbnail">
                    <img src="uploads/blog/6D948Kf2iI.pdf" class="img-responsive" alt="Image">
                    <div class="featured-text relative-left">
                        <h3 class="primary"><a href="blogitem/ateswt.html">ateswt</a></h3>
                        <p>
                        <p>{{$blog->blog_title}}</p>
                        
                        <p>
                            <strong>Tags: </strong>
                            No Tags
                        </p>
                       
                       <div class="text-right primary"><a href="#">Read more</a></div>
                        
                    </div>
                    <!-- /.featured-text -->
                </div>

                @endforeach
            </div>


            @include('include.side_bar')
        </div>
    </div>
</div>
@endsection
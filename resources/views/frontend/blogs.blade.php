@extends('layouts.frontend')

@section('content')

<div class="container">
    <h2>Blog</h2>
    <div class="row">
        <div class="content">

            <div class="col-md-8">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-12">
                        <div class="news-blocks">
                            @if($blog->hasImage == 'YES')
                            <img src='{{asset('public/blogs/pictures/'.$blog->feature_image)}}' data-src="holder.js/2000x203/#5bc0de:#fff" class="img img-responsive img-thumbnail" alt="image" 
                                 style="height: 150px; width: 100%"/>
                            @endif
                            <h3>
                                <a href="#">{{$blog->blog_title}}</a>
                            </h3>
                            <strong>{{$blog->catgeoryName}}</strong>
                            <em>{{$blog->created_at->diffForHumans()}}</em>
                            <p>
                                {{ mb_substr(strip_tags(html_entity_decode($blog->blog_content)), '0','400')}}
                               
                            </p>
                            <a href='{{route('blogs.show',$blog->id)}}'>
                                Read more..
                                <i class="m-icon-swapright m-icon-black"></i>
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>
                <!-- BEGIN FEATURED POST -->




            </div>


            @include('include.side_bar')
        </div>
    </div>
</div>
@endsection
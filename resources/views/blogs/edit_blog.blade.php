@extends('layouts.admin')

@section('title')
Add Blog 
@endsection
@section('content')
<div class="row">
    <div class="the-box no-border">
        <form method="POST" action='{{route('blog.update',$blog->id)}}' class="form-horizontal" enctype="multipart/form-data">
             {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group label-floating">
                        <label class="control-label sr-only" for="title"></label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control input-lg" placeholder="Post title here..." value='{{$blog->blog_title}}'>
                    </div>
                    <div class='box-body pad'>
                        <textarea id="summernote" class="summernote" name="blog_content">
                           {{$blog->blog_content}}
                        </textarea>

                    </div>
                </div>
                <!-- /.col-sm-8 -->
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="category1" class="control-label">Post category</label>
                        <select class="form-control" id="blog_category" name="blog_category" >
                         {{$blog->blog_category_id}}
                            @foreach($blog_category as $category)
                            <option value='{{$category->id}}'>{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Featured image</label>
                        <input type="text" readonly="" class="form-control" placeholder="Select file" name="selectedFiles">
                        <input type="file" id="inputFile5"  name="feature_image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-raised btn-success">Save and post</button>
                        <button class="btn btn-raised btn-danger">Discard</button>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </form>
    </div>
</div>
@endsection

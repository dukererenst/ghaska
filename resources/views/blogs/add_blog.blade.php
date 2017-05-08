@extends('layouts.admin')

@section('title')
Add Blog 
@endsection
@section('content')
<div class="row">
    <div class="the-box no-border">
        <form method="POST" action='{{route('blog.store')}}' class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
              

                <!-- /.col-sm-8 -->
                <div class="col-sm-4">
                    <div class="form-group ">
                        <label class="control-label " for="title">Blog Title</label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control " placeholder="Post title here..." required>
                    </div>
                    <div class="form-group">
                        <label class="control-label " for="title">Blog Content</label>
                        <textarea  class="form-control" name="blog_content" rows="4" placeholder="Post Content here..." required></textarea>


                    </div>
                    <div class="form-group">
                        <label for="category1" class="control-label">Post category</label>
                        <select class="form-control" id="blog_category" name="blog_category" required>
                            <option value="">Select One</option>
                            @foreach($blog_category as $category)
                            <option value='{{$category->id}}'>{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Featured image</label>
                        <input type="text" readonly="" class="form-control" placeholder="Select file">
                        <input type="file" id="inputFile"  name="feature_image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-raised btn-success">Save and post</button>
                        <a href="#" class="btn btn-raised btn-danger">Discard</a>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
            </div>
            <!-- /.row -->
        </form>
    </div>
</div>
@endsection

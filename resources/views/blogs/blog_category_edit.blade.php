@extends('layouts.admin')

@section('title')
Edit Blog Category
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Blog Category </h4>
            </div>
            <div class="panel-body">
                   <form method="POST" action='{{route('blog_category.update',$blog_category->id)}}' enctype="multipart/form-data">
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <label class="col-sm-2 control-label">
                            Blog Category Name </label>
                        <div class="col-sm-5">
                            <input class="form-control" placeholder="Category name" name="category_name" type="text" value='{{$blog_category->category_name}}' required>
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href='{{route('blog_category.index')}}'>
                                Cancel </a>
                            <button type="submit" class="btn btn-success">
                                Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
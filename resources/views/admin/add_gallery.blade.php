@extends('layouts.admin')

@section('title')
Gallery 
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h4 class="panel-title">New Gallery  </h4>
            </div>
            <div class="panel-body">
                <form method="POST" action='{{route('admin_gallery.store')}}' class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <label class="col-sm-2 control-label">
                             Category Name </label>
                        <div class="col-sm-5">
                            <select class="form-control" required name="group">
                                <option value="">Select One</option>
                                @foreach($galleryGroup as $group)
                                <option value='{{$group->id}}'>{{$group->group_name}}</option>
                                @endforeach
                            </select>
                          
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Featured image</label>
                        <div class="col-sm-5">
                            <input type="text" readonly="" class="form-control" placeholder="Select files" >
                            <input type="file" id="inputFile"  name="feature_image[]" required multiple>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href='{{route('admin_gallery.index')}}'>
                                Cancel </a>
                            <button type="submit" class="btn btn-success">
                                Save </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
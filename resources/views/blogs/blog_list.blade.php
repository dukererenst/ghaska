@extends('layouts.admin')

@section('title')
All Blog 
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="material-icons">person</i> Blog List
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{$blog->created_at->diffForHumans()}}</td>
                                <td>
                                    <span><a href='{{route('blog.show',$blog->id)}}'><i class="material-icons text-primary mate-icons" title="view blog ">info</i></a>
                                    </span>
                                    <span><a href='{{route('blog.edit',$blog->id)}}'><i class="material-icons text-primary mate-icons" title="update blog">edit</i></a>
                                    </span>
                                    <span><a href="#" data-toggle="modal" data-target="#delete_confirm"><i class="material-icons text-danger mate-icons" title="Delete blog">clear</i></a>
                                    </span>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    <!-- Modal for showing delete confirmation -->
                    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title" id="user_delete_confirm_title">
                                        Delete User
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this user? This operation is irreversible.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
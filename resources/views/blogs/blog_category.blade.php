@extends('layouts.admin')

@section('title')
Blog Catgeory
@endsection
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary blog_category">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left">  Blog Category List</h4>
                <div class="pull-right">
                    <a href='{{route('blog_category.create')}}' class="btn btn-sm btn-default"><i class="material-icons add">add</i> Create</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>No. of Blogs</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         @forelse($blog_category as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>0</td>
                            <td>{{$category->created_at->diffForHumans()}}</td>
                            <td>{{$category->updated_at->diffForHumans()}}</td>
                            <td>
                                 <a href='{{route('blog_category.edit',$category->id)}}'<i class="material-icons text-primary mate-icon" title="update blog">edit</i></a>
<!--                                 |
                                <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="material-icons text-danger mate-icon" title="Delete blog category">clear</i>
                                </a>-->
                            </td>
                        </tr>
                        @empty
                        No Blog Category
                       @endforelse
                      
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of modal-->
            </div>
        </div>
    </div>
</div>
@endsection

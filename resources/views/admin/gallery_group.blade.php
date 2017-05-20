@extends('layouts.admin')

@section('title')
Gallery Group List
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <div  class="panel-title">
                    <i class="material-icons">person</i> Gallery Group List
                    <div class="pull-right">
                        <a href='{{route('galleryGroup.create')}}' class="btn btn-sm btn-default"><i class="material-icons add">add</i> Create</a>
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table2">
                        <thead>
                            <tr>
                                <th>Group Name</th>
                                <th>Updated At</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleryGroupList as $group)
                            <tr>
                                <td>
                                    {{$group->group_name}}
                                </td>
                                <td>
                                  {{$group->created_at->diffForHumans()}}
                                </td>
                                <td>
                                  {{$group->updated_at->diffForHumans()}}
                                </td>
                                <td>
                                  <a href='{{route('galleryGroup.edit',$group->id)}}' ><span class="fa fa-edit"/></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
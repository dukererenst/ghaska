 @extends('layouts.admin')

@section('title')
All Executives
@endsection
@section('content')
<div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    All Executives Information
                    <div class="pull-right">
                    <a href='{{route('admin_executives.create')}}' class="btn btn-sm btn-default"><i class="material-icons add">add</i> Create</a>
                </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                 <th>
                                    Position
                                </th>
                                <th>
                                    Full Name
                                </th>
                                <th>
                                   Telephone
                                </th>
                                <th>
                                   Email Address
                                </th>
                                <th>
                                   Program
                                </th>
                                <th>
                                  Institution
                                </th>
                               
                               
                                <th>
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($execustives as $execustive)
                        <tr>
                            <td>
                                {{$execustive->position}}
                            </td>
                            <td>
                               {{ $execustive->full_name}}
                            </td>
                            <td>
                               {{ $execustive->telephone}}
                            </td>
                            <td>
                               {{ $execustive->email_address}}
                            </td>
                            <td>
                               {{ $execustive->program}}
                            </td>
                            <td>
                               {{ $execustive->institution}}
                            </td>
                            <td>
                                <a href='{{route('admin_executives.edit',$execustive->id)}}' ><span class="fa fa-edit"/></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
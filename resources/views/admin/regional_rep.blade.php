 @extends('layouts.admin')

@section('title')
All Regional Rep
@endsection
@section('content')
<div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                   All Regional Rep Information
                    <div class="pull-right">
                    <a href='{{route('regional_reps.create')}}' class="btn btn-sm btn-default"><i class="material-icons add">add</i> Create</a>
                </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
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
                                  Region
                                </th>
                               
                               
                                <th>
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($reps as $rep)
                        <tr>
                           
                            <td>
                               {{ $rep->full_name}}
                            </td>
                            <td>
                               {{ $rep->telephone}}
                            </td>
                            <td>
                               {{ $rep->email_address}}
                            </td>
                            <td>
                               {{ $rep->program}}
                            </td>
                            <td>
                               {{ $rep->regionName}}
                            </td>
                            <td>
                                <a href='{{route('regional_reps.edit',$rep->id)}}' ><span class="fa fa-edit"/></a>
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
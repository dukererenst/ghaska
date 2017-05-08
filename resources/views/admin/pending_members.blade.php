@extends('layouts.admin')

@section('title')
All Members
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    All Current Members
                </div>
            </div>
            <div class="panel-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <table class="table table-bordered  dataTable no-footer">
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
                                    Status
                                </th>
                                <th>
                                   Authorise
                                </th>
                                <th>
                                   Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                            <tr>
                                <td>
                                    {{$member->last_name}} {{$member->first_name}}
                                </td>
                                <td>
                                    {{$member->telephone}}
                                </td>
                               
                             
                               
                                <td>
                                    {{$member->email}}
                                </td>
                                <td>
                                    {{$member->status}}
                                </td>
                                
                                <td>
                                       <a href='{{route('pending_user.edit',$member->id)}}'<i class="material-icons text-primary mate-icon" title="Accept">thumb_up</i></a>
                                  
                                </td>
                                <td>
                                       <a href='{{route('pending_user.destroy',$member->id)}}'<i class="material-icons text-primary mate-icon" title="Delete">thumb_down</i></a>
                                  
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
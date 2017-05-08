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
                                    Institution
                                </th>
                                <th>
                                    Program
                                </th>
                                <th>
                                    Department
                                </th>

                                <th>
                                    Residence
                                </th>
                                <th>
                                    Lab 
                                </th>
                                <th>
                                    Email Address
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    View
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
                                    {{$member->institution_id}}
                                </td>
                                <td>
                                    {{$member->program}}
                                </td>
                                <td>
                                    {{$member->department}}
                                </td>
                                <td>
                                    {{$member->residence}}
                                </td>
                                <td>
                                    {{$member->lab_name}}
                                </td>
                                <td>
                                    {{$member->email}}
                                </td>
                                <td>
                                    {{$member->status}}
                                </td>
                                
                                <td>
                                    <a href='{{route('members.show',$member->id)}}'<i class="material-icons text-primary mate-icon" title="View Catalog">visibility</i></a>
                                  
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
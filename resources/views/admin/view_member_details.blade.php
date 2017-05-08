@extends('layouts.admin')

@section('title')
 Membership Details
@endsection
@section('content')
    
                <div class="row">
                    <div class="col-lg-12">
                       
                        <div class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    Details of 
                                                </h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="text-center">
                                                            <div class="fileinput fileinput-new" >
                                                                <div class="fileinput-new thumbnail img-file">
                                                                    <img src="#" data-src="holder.js/190x140/#00bc8c:#fff" alt="...">
                                                                </div>
                                                              
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped" id="users">
                                                                <tr>
                                                                    <td>Other Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Other Name">{{$member->other_name}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>First Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Other Name">{{$member->first_name}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" E-mail">{{$member->email}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Phone Number">{{$member->telephone}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" Address">{{$member->residence}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Program</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" Program">{{$member->program}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Department</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" Address">{{$member->department}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lab Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" Lab Name">{{$member->lab_name}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Region</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title=" Region">{{$member->institution}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>
                                                                        <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status">{{$member->status}}</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Created At</td>
                                                                    <td>
                                                                       {{$member->created_at->diffForHumans()}}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Updated At</td>
                                                                    <td>
                                                                       {{$member->updated_at->diffForHumans()}}
                                                                    </td>
                                                                </tr>
                                                               
                                                            </table>
                                                        </div>
                                                    </div>
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

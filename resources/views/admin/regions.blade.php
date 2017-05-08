@extends('layouts.admin')

@section('title')
Regions
@endsection
@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="panel panel-info ">
            <div class="panel-heading">
                <div class="panel-title">
                    Region Information
                </div>
            </div>
            <div class="panel-body">
                <form method="POST" action='{{route('regions.store')}}'>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label >Region Name</label>
                            <input type="text" name="region_name" id="region_name" class="form-control" required/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Region Code</label>
                            <input type="text" name="region_code" id="region_code" class="form-control" required/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Location</label>
                            <input type="text" name="location" id="location" class="form-control" required/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Contact Person</label>
                            <input type="text" name="contact_person" id="contact_person" class="form-control" required/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Contact Person Telephone</label>
                            <input type="text" name="contact_person_telephone" id="contact_person_telephone" class="form-control" required/>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">

                            <input type="submit" class="btn btn-block btn-info" value="Save"/>


                        </div>
                    </div>

                </form> 

            </div>

        </div> 
    </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">
                    All Region Information
                </div>
            </div>
            <div class="panel-body">
                <div class="table-scrollable">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Region Name
                                </th>
                                <th>
                                    Region Code
                                </th>
                                <th>
                                    Location
                                </th>
                                <th>
                                    Contact Person
                                </th>
                                <th>
                                    Telephone
                                </th>
                                <th>
                                    Edit
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($regions as $region)
                        <tr>
                            <td>
                                {{$region->region_name}}
                            </td>
                            <td>
                               {{ $region->region_code}}
                            </td>
                            <td>
                               {{ $region->location}}
                            </td>
                            <td>
                               {{ $region->contact_person}}
                            </td>
                            <td>
                               {{ $region->contact_person_telephone}}
                            </td>
                            <td>
                                <a href='{{route('regions.edit',$region->id)}}' ><span class="fa fa-edit"/></a>
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
@extends('layouts.admin')

@section('title')
Edit Regions
@endsection
@section('content')


<div class="row">
    <div class="col-md-6">
        <div class="portlet box primary">
            <div class="portlet-title">
                <div class="caption">
                    Region Information
                </div>
            </div>
            <div class="portlet-body">
                <form method="POST" action='{{route('regions.update',$region->id)}}'>
                    {{method_field('PUT')}}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label >Region Name</label>
                            <input type="text" name="region_name" id="region_name" class="form-control" value='{{$region->region_name}}' required=""/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Region Code</label>
                            <input type="text" name="region_code" id="region_code" class="form-control" required value='{{$region->region_code}}'/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Location</label>
                            <input type="text" name="location" id="location" class="form-control" required value='{{$region->location}}'/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Contact Person</label>
                            <input type="text" name="contact_person" id="contact_person" class="form-control" required value='{{$region->contact_person}}'/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label >Contact Person Telephone</label>
                            <input type="text" name="contact_person_telephone" id="contact_person_telephone" class="form-control" required value='{{$region->contact_person_telephone}}'/>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">

                            <input type="submit" class="btn btn-block btn-info" value="Update"/>


                        </div>
                    </div>

                </form> 

            </div>

        </div> 
    </div>
    
</div>

@endsection
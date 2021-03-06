@extends('layouts.admin')

@section('title')
Create  Regional Rep
@endsection
@section('content')
<div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                Regional Rep Information
            </div>
        </div>
        <div class="panel-body">
            <form method="POST" action='{{route('regional_reps.update',$rep->id)}}' class="form-horizontal" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label >Full Name</label>
                        <input type="text" name="full_name"  class="form-control" required value='{{$rep->full_name}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Region</label>
                        <select name="region"  class="form-control" required>
                           
                            @foreach($regions as $region)
                            <option value='{{$region->id}}'>{{$region->region_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-6 form-group">
                        <label >Telephone</label>
                        <input type="text" name="telephone"  class="form-control" required value='{{$rep->telephone}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Email Address</label>
                        <input type="email" name="email_address"  class="form-control" required value='{{$rep->email_address}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Program</label>
                        <input type="text" name="program"  class="form-control" required value='{{$rep->program}}'/>
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Image</label> 
                        <input type="text" readonly="" class="form-control" placeholder="Select file" name="imageNames" value='{{$rep->picture}}'>
                        <input type="file" id="inputFile"  name="feature_image">
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-raised btn-success">Save Information</button>
                    <a href='{{route('regional_reps.index')}}' class="btn btn-raised btn-danger">Discard</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
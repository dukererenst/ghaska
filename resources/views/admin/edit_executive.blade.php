@extends('layouts.admin')

@section('title')
Create Executive
@endsection
@section('content')
<div class="col-md-6">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                Executive Information
            </div>
        </div>
        <div class="panel-body">
            <form method="POST" action='{{route('admin_executives.update',$executive->id)}}' class="form-horizontal" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label >Full Name</label>
                            <input type="text" name="full_name"  class="form-control" required value='{{$executive->full_name}}'/>
                        </div>
                        <div class="col-md-6 form-group">
                        <label >Posit                            ion</label>
                        <select name="position"  class="form-control" required >
                       
                            <option value="">Select One</option>
                                @foreach($positions as $position)
                                <option value='{{$position->position_name}}'>{{$position->position_name}}</option>
                                @endforeach
                            </select>

                    </div>
                    <div class="col-md-6 form-group">
                        <label >Telephone</label>
                        <input type="text" name="telephone"  class="form-control" required value='{{$executive->telephone}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Email Address</label>
                        <input type="email" name="email_address"  class="form-control" required value='{{$executive->email_address}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Program</label>
                        <input type="text" name="program"  class="form-control" required value='{{$executive->program}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label >Institution</label>
                        <input type="text" name="institution"  class="form-control" required value='{{$executive->institution}}'/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Image</label> 
                        <input type="text" readonly="" class="form-control" placeholder="Select file" name="imageNames" value='{{$executive->picture}}'>
                        <input type="file" id="inputFile"  name="feature_image">
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-raised btn-success">Save Information</button>
                    <a href="#" class="btn btn-raised btn-danger">Discard</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
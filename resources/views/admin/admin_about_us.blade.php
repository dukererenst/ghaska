@extends('layouts.admin')

@section('title')
About Us
@endsection
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info ">
            <div class="panel-heading">
                <div class="panel-title">
                    About Us Information
                </div>
            </div>
            <div class="panel-body">
                <form method="POST" action='{{route('admin_about_us.store')}}'>
                    {{ csrf_field() }}
                    <div class="row">
                        
                        <div class="col-md-12 form-group">
                            <label >About Us</label>
                             <div class="pull-right box-tools"></div>
                            <textarea class="form-control editor-cls"  name="about_us" rows="8">{{$aboutUs->about_us}}</textarea>

                        </div>
                        <div class="col-md-12 form-group">
                            <h2>Who we are</h2>
                            <textarea class="form-control editor-cls" rows="8" name="who_we_are">{{$aboutUs->who_we_are}}</textarea>

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

</div>
@endsection
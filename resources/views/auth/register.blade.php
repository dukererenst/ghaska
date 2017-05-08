@extends('layouts.register')

@section('content')
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX">
          <img src='{{asset('public/img/ghaska.png')}}' alt="logo" class="img-responsive mar"/>
           
            <h3 class="text-primary">Register</h3>
            <!-- Notifications -->
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                <!-- CSRF Token -->
              {{ csrf_field() }}
             
              

                <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label class="sr-only"> First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                           value="" required>
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group {{ $errors->has('other_name') ? ' has-error' : '' }}">
                    <label class="sr-only"> Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="other_name" placeholder="Other Name"
                           value="" required>
                     @if ($errors->has('other_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('other_name') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group ">
                    <label class="sr-only"> Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                           value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>
                 <div class="form-group {{ $errors->has('telephone') ? ' has-error' : '' }}">
                    <label class="sr-only"> Telphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Telephone"
                           value="" required>

                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="sr-only"> Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group ">
                    <label class="sr-only"> Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                           placeholder="Confirm Password">

                </div>
                <div class="form-group ">
                    <label class="sr-only">Gender</label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                    </label>

                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="subscribed" >  I accept <a href="#"> Terms and Conditions</a>
                    </label>
                </div>
                <br/>
                <input type="submit" class="btn btn-block btn-primary" value="Sign up" name="submit">
                Already have an account? Please <a href="{{ route('login') }}"> Sign In</a>
            </form>
        </div>
    </div>
    <!-- //Content Section End -->
</div>







<!--<div class="container">

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>

</div>-->
@endsection

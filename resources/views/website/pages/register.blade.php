@extends('website.layouts.default')
@section('content')
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="{{URL::to('create-student')}}">
                        {{ csrf_field() }}
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                <input class="input--style-4" type="text" name="fname" value="{{old('fname')}}">
                                    @if ($errors->first('fname'))
                                    <div class="alert alert-danger">{{$errors->first('fname')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="lname" value="{{old('lname')}}">
                                    @if ($errors->first('fname'))
                                    <div class="alert alert-danger">{{$errors->first('lname')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="date" name="dob" value="{{old('dob')}}">
                                        
                                    </div>
                                    @if ($errors->first('dob'))
                                    <div class="alert alert-danger">{{$errors->first('dob')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value='male' name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value='female' name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="{{old('email')}}">
                                    @if ($errors->first('email'))
                                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                <input class="input--style-4" type="number" name="mobile" value="{{old('mobile')}}">
                                    @if ($errors->first('mobile'))
                                    <div class="alert alert-danger">{{$errors->first('mobile')}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                          <div class="col-6">
                              <div class="input-group">
                                  <label class="label">Password</label>
                                  <input class="input--style-4" type="password" name="password1">
                                  @if ($errors->first('password1'))
                                    <div class="alert alert-danger">{{$errors->first('password1')}}</div>
                                    @endif
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="input-group">
                                  <label class="label">Confirm Password</label>
                                  <input class="input--style-4" type="password" name="password2">
                                  @if ($errors->first('password2'))
                                    <div class="alert alert-danger">{{$errors->first('password2')}}</div>
                                    @endif
                              </div>
                          </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@stop

@section('scripts')
     <!-- Jquery JS-->
    <script src="{{asset('ui/website/register/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('ui/website/register/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('ui/website/register/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('ui/website/register/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('ui/website/register/js/global.js')}}"></script>
@stop
    
   
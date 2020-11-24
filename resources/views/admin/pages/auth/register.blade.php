@extends('admin.layouts.single')
@section('abc')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                    <form method="post" action="{{URL::to ('create-student')}}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                        <input class="form-control py-4" type="text" name="fname" value="{{old('fname')}}" placeholder="Enter first name" />
                                        @if ($errors->first('fname'))
                                        <div class="alert alert-danger">{{$errors->first('fname')}}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                        <input class="form-control py-4" type="text" name="lname" value="{{old('lname')}}" placeholder="Enter last name" />
                                        @if ($errors->first('lname'))
                                        <div class="alert alert-danger">{{$errors->first('lname')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" type="email" name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="Enter email address" />
                                @if ($errors->first('email'))
                                <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" type="password" name="password1" placeholder="Enter password" />
                                        @if ($errors->first('password1'))
                                        <div class="alert alert-danger">{{$errors->first('password1')}}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                        <input class="form-control py-4" type="password" name="password2" placeholder="Confirm password" />
                                        @if ($errors->first('password2'))
                                        <div class="alert alert-danger">{{$errors->first('password2')}}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-0"> <a class="btn btn-primary btn-block" href="{{ URL::to('login') }}">Create Account</a></div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                         <div class="small"><a href="{{ URL::to('login') }}">Have an account? Go to login</a></div>
                     </div>
                 </div>
             </div>
         </div>
    </div>
</main>
@stop
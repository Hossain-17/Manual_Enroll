@extends('admin.layouts.single')
@section('abc')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                 <div class="card shadow-lg border-0 rounded-lg mt-5">
                     <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                         <form action="{{ URL::to ('loginstore') }}" method="post"> 
                         {{ csrf_field() }}
                             <div class="form-group">
                                 <label class="small mb-1" for="inputEmailAddress">Email</label>
                                   <input class="form-control py-4" id="inputEmailAddress" name='email' type="email" placeholder="Enter email address" />
                             </div>
                             <div class="form-group">
                                 <label class="small mb-1" for="inputPassword">Password</label>
                                 <input class="form-control py-4" id="inputPassword" name='password' type="password" placeholder="Enter password" />
                             </div>
                             <div class="form-group">
                                 <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                 </div>
                             </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                 <a class="small" href="{{ URL::to('forgot') }}">Forgot Password?</a>
                                 <button class="btn btn-primary" type="submit">Login</button>
                             </div>
                            </form>
                       </div>
                     <div class="card-footer text-center">
                           <div class="small"><a href="{{ URL::to('register') }}">Need an account? Sign up!</a></div>
                     </div>
                 </div>
             </div>
        </div>
     </div>
</main> 
@stop
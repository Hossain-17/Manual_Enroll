@extends('admin.layouts.single')
@section('abc')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                    <div class="card-body">
                        <form action="{{ URL::to ('login') }}" method="post">
                        {{ csrf_field() }}
                            <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="{{ URL::to('login') }}">Return to login</a>
                                    <a class="btn btn-primary" href="login.html">Reset Password</a>
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
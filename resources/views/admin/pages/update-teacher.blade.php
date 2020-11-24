@extends('admin.layouts.default')
@section('content')
<div class="wrapper wrapper--w680">
    <div class="card card-4">
        <div class="card-body">
            <h2 class="title">Registration Form</h2>
            <form method="POST" action="{{URL::to('update-teacher/'.$teacher->id)}}">
                {{ csrf_field() }}
                <div class="row row-space">
                    <div class="col-6">
                        <div class="input-group">
                            <label class="label">first name</label>
                        <input class="input--style-4" type="text" name="fname" value="{{$teacher->fname}}">
                            @if ($errors->first('fname'))
                            <div class="alert alert-danger">{{$errors->first('fname')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <label class="label">last name</label>
                            <input class="input--style-4" type="text" name="lname" value="{{$teacher->lname}}">
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
                            <input class="input--style-4 js-datepicker" type="date" name="dob" value="{{$teacher->dob}}">
                                
                            </div>
                            @if ($errors->first('dob'))
                            <div class="alert alert-danger">{{$errors->first('dob')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
                <div class="row row-space">
                   
                    <div class="col-6">
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                        <input class="input--style-4" type="number" name="mobile" value="{{$teacher->mobile}}">
                            @if ($errors->first('mobile'))
                            <div class="alert alert-danger">{{$errors->first('mobile')}}</div>
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
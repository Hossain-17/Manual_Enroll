@extends('admin.layouts.double')
@section('abc')

   <main>
    <div class="container">
        <div class="jumbotron text-center">
           <h2>Edit Teacher</h2>
            @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ Session::get('success')}}</strong>
            </div>
            @endif
        </div>
        <div class="section col-md-8 offset-md-2">

            <form method="post" action="{{ URL::to('update-teacher/'.$teacher->id) }}">

                 {{ csrf_field() }}


        <div class="form-group">
            <label for="">Name</label>
            <input type="text" value="{{ $teacher->name }}" class="form-control" placeholder="Enter Name" name="name">
            @if($errors->first('name'))
            <div class="alert alert-danger"> 
                {{ $errors->first('name') }}        
            </div>  
            @endif 
        </div>  

        <div class="form-group">
            <label for="teacher_id">Teacher Id</label>
            <input type="teacher_id" value="{{ $teacher->teacher_id }}" class="form-control" placeholder="Enter ID" name="teacher_id">
            @if($errors->first('teacher_id'))
            <div class="alert alert-danger"> 
                {{ $errors->first('teacher_id') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" value="{{ $teacher->email }}" class="form-control" placeholder="Enter Email" name="email">
            @if($errors->first('email'))
            <div class="alert alert-danger"> 
                {{ $errors->first('email') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
            <label for="">Date Of Birth</label>
            <input type="date" value="{{ $teacher->dob }}" class="form-control" placeholder="Enter Date" name="dob">
            @if($errors->first('dob'))
            <div class="alert alert-danger"> 
                {{ $errors->first('dob') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
             <label for="">Gender</label>
             <select class="form-control" value="{{ $teacher->gender }}" name="gender" > 
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
             @if($errors->first('gender'))
            <div class="alert alert-danger"> 
                {{ $errors->first('gender') }}        
            </div>  
            @endif 
        </div>

        <!-- <div class="form-group">
            <label for="">Status</label>
            <select name="status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
             </select>
        </div> -->

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update">
        
        <a class="btn btn-secondary" href="{{ URL::to('teachers') }}">Back to Teacher-List</a>
        </div>
        
        </form>

        <div>
            @if ($errors->any())
                <div class="alert alert-danger"> 
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                    </ul>
                </div>
            @endif
            </div>
        
        </div>
    </div>
    </main>
@stop
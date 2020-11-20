<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
           <h2>Edit Student</h2>
            @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>{{ Session::get('success')}}</strong>
            </div>
            @endif
        </div>
        <div class="section col-md-8 offset-md-2">

            <form method="post" action="{{ URL::to('update-student/'.$student->id) }}">

                 {{ csrf_field() }}


        <div class="form-group">
            <label for="">Name</label>
            <input type="text" value="{{ $student->name }}" class="form-control" placeholder="Enter Name" name="name">
            @if($errors->first('name'))
            <div class="alert alert-danger"> 
                {{ $errors->first('name') }}        
            </div>  
            @endif 
        </div>  

        <div class="form-group">
            <label for="roll">Roll</label>
            <input type="roll" value="{{ $student->roll }}" class="form-control" placeholder="Enter Roll" name="roll">
            @if($errors->first('roll'))
            <div class="alert alert-danger"> 
                {{ $errors->first('roll') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" value="{{ $student->email }}" class="form-control" placeholder="Enter Email" name="email">
            @if($errors->first('email'))
            <div class="alert alert-danger"> 
                {{ $errors->first('email') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
            <label for="">Date Of Birth</label>
            <input type="date" value="{{ $student->dob }}" class="form-control" placeholder="Enter Date" name="dob">
            @if($errors->first('dob'))
            <div class="alert alert-danger"> 
                {{ $errors->first('dob') }}        
            </div>  
            @endif 
        </div>

        <div class="form-group">
            <label for="">Semester</label>
            <input type="text" value="{{ $student->semester }}" class="form-control" placeholder="Enter Semester" name="semester">
            @if($errors->first('semester'))
            <div class="alert alert-danger"> 
                {{ $errors->first('semester') }}        
            </div>  
            @endif 
        </div>


        <div class="form-group">
            <label for="">Batch</label>
            <input type="text" value="{{ $student->batch }}" class="form-control" placeholder="Enter Batch" name="batch">
            @if($errors->first('batch'))
            <div class="alert alert-danger"> 
                {{ $errors->first('batch') }}        
            </div>  
            @endif 
        </div>

        <!-- <div class="form-group">
             <label for="">Gender</label>
             <select class="form-control" value="{{ $student->gender }}" name="gender" > 
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
             @if($errors->first('gender'))
            <div class="alert alert-danger"> 
                {{ $errors->first('gender') }}        
            </div>  
            @endif 
        </div> -->

        <div class="form-group">
            <label for="">Adviser</label>
            <input type="text" value="{{ $student->adviser }}" class="form-control" placeholder="Adviser Name" name="adviser">
            @if($errors->first('adviser'))
            <div class="alert alert-danger"> 
                {{ $errors->first('adviser') }}        
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
        
        <a class="btn btn-secondary" href="{{ URL::to('students') }}">Back to Student-List</a>
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
</body>
</html>
@extends('website.layouts.default')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h4>Enrollment</h4>
        <div class="card">
            <div class="card-header">
                Choose Courses
            </div>
            <div class="card-body">
                <form method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <div class="col-6">
                        <label for="">Select Session</label>
                            <select class="form-control" name="session" id="session">
                                <option value="">Session</option>
                                <option value="1">Spring 2020</option>
                                <option value="2">Fall 2020</option>
                            </select>
                    </div>
                    <div class="col-6">
                        <label for="">Select Semester</label>
                            <select class="form-control" name="semester" id="semester">
                                <option value="">Semester</option>
                                <option value="1">1st Semester</option>
                                <option value="2">2nd Semester</option>
                                <option value="3">3rd Semester</option>
                                <option value="4">4th Semester</option>
                                <option value="5">5th Semester</option>
                                <option value="6">6th Semester</option>
                                <option value="7">7th Semester</option>
                                <option value="8">8th Semester</option>
                            </select>
                    </div>                     
                    </div>
                    <div class="form-group">
                        <button id="add_btn" class="btn btn-success btn-sm">Course List</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#add_btn").hide();
            $("#semester").change(function(){
                var course_val = $('#semester').val();
                if(course_val!=""){
                     $("#add_btn").show();
                }
                else {
                    $("#add_btn").hide();
                }
            });
        });
    </script>
</body>
</html>
@stop
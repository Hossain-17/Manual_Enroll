<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .modal{
            color:#000;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
           <h2>List of Students</h2>
            
        <div class="section">
        <a class="btn btn-primary" href="{{ URL::to('student-add') }}">Add</a>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Roll</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Semester</th>
                <th>Batch</th>
                <th>Gender</th>
                <th>Adviser</th>
                <th>Actions</th>
             </thead>

        <tbody>
        @foreach($students as $s)
             <tr>
                <td>{{ $s-> name }}</td>
                <td>{{ $s-> roll }}</td>
                <td>{{ $s-> email }}</td>
                <td>{{ $s-> dob }}</td>
                <td>{{ $s-> semester }}</td>
                <td>{{ $s-> batch }}</td>
                <td>{{ $s-> gender }}</td>
                <td>{{ $s-> adviser }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ URL::to('edit-student/'.$s->id) }}">Edit</a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal{{$s->id}}">Delete</button>
                        
                    <div class="modal" id="modal{{ $s->id }}">
                        <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                            <h4 class="modal-title">Delete Confirmation.!</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                            Are you sure?
                            </div>

                            <div class="modal-footer">
                            <a class="btn btn-success" href="{{ URL::to('delete-student/'.$s->id)}}">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>
                            
                        </div>
                        </div>
                    </div>

                </td>
             </tr>

             @endforeach
        </tbdy>
        </table>
        </div>
        
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> 
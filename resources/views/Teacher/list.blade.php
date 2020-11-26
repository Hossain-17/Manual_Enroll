@extends('admin.layouts.double')
@section('abc')
<main>
    <div class="container">
        <div class="jumbotron text-center">
           <h2>List of Teachers</h2>
            
        <div class="section">
            @if($status == 1)
        <a class="btn btn-primary" href="{{ URL::to('teacher-add') }}">Add</a>
            @endif
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Teacher ID</th>
                <th>Email</th>
                <th>DOB</th>
                
                @if($status == 1)
                    <th>Actions</th>
                @endif
             </thead>

        <tbody>
        @foreach($teachers as $t)
             <tr>
                <td>{{ $t->name }}</td>
                <td>{{ $t->teacher_id }}</td>
                <td>{{ $t->email }}</td>
                <td>{{ $t->dob }}</td>
                
                
                @if($status == 1)
                <td>
                    <a class="btn btn-primary" href="{{ URL::to('edit-teacher/'.$t->id) }}">Edit</a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal{{$t->id}}">Delete</button>                       
                    <div class="modal" id="modal{{ $t->id }}">
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
                            <a class="btn btn-success" href="{{ URL::to('delete-teacher/'.$t->id)}}">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            </div>                          
                        </div>
                        </div>
                    </div>
                </td>
                @endif
             </tr>
             @endforeach
        </tbdy>
        </table>
        </div>    
        </div>
    </div>
  </main>
@stop
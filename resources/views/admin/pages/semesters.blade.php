@extends('admin.layouts.double')
@section('abc')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Semesters</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Semesters</li>
        </ol>
        <div class="table-responsive">
            <table id="semesterstbl"  class="table table-striped">
                <thead>
                    <th>Sections</th>
                    <th>Student ID</th>
                    <th>Course Code</th>
                    <th>Teachers</th>
                </thead>
            <tbody>
            @foreach($semesters as $s)
                <tr>                   
                    <td>{{ $s->section }}</td>
                    <td>{{ $s->student_id }}</td>                  
                    <td>{{ $s->course_code }}</td> 
                    <td>{{ $s->teachers }}</td>
                </tr>
            @endforeach 
            </tbody>
            </table>
        </div>

    </div>
</main>
@stop

@section('myscripts')
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#semesterstbl').DataTable();
} );
</script>
@stop
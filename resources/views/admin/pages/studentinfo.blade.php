@extends('admin.layouts.default')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Students</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Students</li>
            </ol>
            <a href="{{URL::to('add-student')}}" class="btn btn-primary" style="float:right">Add</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="studentdata" >
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        @foreach ($students as $s)
                            <tr>
                                <td>{{ $s->fname.' '.$s->lname}}</td>
                                <td>{{$s->email}}</td>
                                <td>{{$s->dob}}</td>
                                <td>{{$s->gender}}</td>
                                <td>{{$s->mobile}}</td>
                            <td><a href="{{URL::to('edit-student/'.$s->id)}}">edit</a>/
                            <a href="{{URL::to('delete-student/'.$s->id)}}">delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
    
@section('scripts')
    {{-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('ui/admin/assets/demo/datatables-demo.js')}}"></script> --}}

    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
        $('#studentdata').DataTable();
      } );
    </script>
@stop
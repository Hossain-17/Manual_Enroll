@extends('admin.layouts.default')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Teachers</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Teachers</li>
            </ol>
            <a href="{{URL::to('add-teacher')}}" class="btn btn-primary" style="float:right">Add</a>
            <div class="table-responsive">
                <table class="table table-hover" id="studentdata">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $t)
                            <tr>
                                <td>{{ $t->fname.' '.$t->lname}}</td>
                                <td>{{$t->email}}</td>
                                <td>{{$t->dob}}</td>
                                <td>{{$t->gender}}</td>
                                <td>{{$t->mobile}}</td>
                            <td><a href="{{URL::to('edit-teacher/'.$t->id)}}">edit</a>/
                            <a href="{{URL::to('delete-teacher/'.$t->id)}}">delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop

@section('scripts')
    

    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#studentdata').DataTable();
    } );
    </script>
@stop
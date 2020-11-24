@extends('admin.layouts.double')
@section('abc')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Image Upload</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Image Upload</li>
        </ol>

        @if(Session::has('msg'))
        <div>{{ Session::get('msg') }}</div>
        @endif

      <div>
        <form method="post" action="{{ URL::to('upload') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="file" multiple name="picture[]" id="picture">
            <br>
            <!-- <img width="100px" src="" height="100px" id="preview" alt=""> -->
            <div id="preview"></div>
            </br>
            <input type="submit" value="Upload">
        </form>
      </div>
        <div>
        @foreach($images as $img)  
            <img width="350px" height="250px" style="padding: 5px" src="{{ asset('uploads/original/'.$img->filename) }}" alt=""> 
          @endforeach
          
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $("#picture").change(function() {
          readURL(this);
        });
        function readURL(input) {
              if (input.files) {
                
                var inputNumber = input.files.length;
                console.log(inputNumber);
                for(var i=0;i<inputNumber;i++){
                  var reader = new FileReader();
                  reader.onload = function(e) {
                    //console.log(e.target.result);
                    console.log('Aissse');
                    $('#preview').append('<img style="padding: 2px" width="100px" height="100px"  src="'+e.target.result+'">');
                    //document.getElementById('preview').innerHtml="Amar mundu";
                   // $('#prev').attr('src', e.target.result);
                  }
                  reader.readAsDataURL(input.files[i]);
                }          
                  // convert to base64 string
              }
            }
    </script>
</main>
@stop
@section('myscripts')
@stop
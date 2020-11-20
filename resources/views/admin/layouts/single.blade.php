<!DOCTYPE html>
<html lang="en">
    <head>
     @include('admin.includes.single.head')   
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                @yield('abc')
               
            </div>
            @include('admin.includes.single.footer')  
         </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('ui/admin/js/scripts.js') }}"></script>
    </body>
</html>

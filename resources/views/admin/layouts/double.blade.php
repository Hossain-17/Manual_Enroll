<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.includes.double.head')
    </head>
    <body class="sb-nav-fixed">
    @include('admin.includes.double.nav')
    <div id="layoutSidenav">
    @include('admin.includes.double.sidebar')
            <div id="layoutSidenav_content">
               
                @yield('abc')
                @include('admin.includes.double.footer')
            </div>
        </div>
        @include('admin.includes.double.scripts')
        @yield('myscripts')
       </body>
</html>

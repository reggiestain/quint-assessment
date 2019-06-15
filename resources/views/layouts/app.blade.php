<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <!-- Required CSS files -->
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>        
        <div class="site">
            <!-- Header -->
            @include('include.header')
            <!-- End Header -->  

            @yield('content')  

            <!-- Footer -->
            @include('include.footer')           
            <!-- End Footer -->
        </div>
        <!--Required JS files-->
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/Datatable.bootstrap.js') }}"></script>
        <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/slicknav.min.js') }}"></script>
        <script src="{{ asset('js/active.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{env('PLACES_API')}}&libraries=places&callback=initAutocomplete" async defer></script>
        <script>
        $(document).ready(function () {
           $('#lead-tbl').DataTable();           
         });   
        </script>
    </body>
</html>

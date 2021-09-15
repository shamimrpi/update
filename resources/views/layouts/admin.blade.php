<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Software Templete | @yield('title')</title>
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        
        @include('partials.admin_navbar')

        <div id="layoutSidenav">
            
            @include('partials.admin_sidebar')

            <div id="layoutSidenav_content">

                @yield('main-content') 
                
                @include('partials.admin_footer')
            
            </div>
        </div>
        <script src="{{ asset('admin/js/scripts.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src=" {{ asset('admin/js/all.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/simple-datatables@latest.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js') }}"></script>
        <script>
            function formatAMPM(date) {
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}

console.log(formatAMPM(new Date));
        </script>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
 @include('partials.admin_head')
  <body class="app sidebar-mini">
    @include('partials.admin_header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('partials.admin_sidebar')
    <main class="app-content">
      <div class="app-title">
        @yield('main_body')
       

          
      </div>
    </main>
  

  @include('partials.admin_scripts')
  @yield('scripts')
  <script type="text/javascript">
      $('#demoNotify').click(function(){
        $.notify({
          title: "Update Complete : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-check' 
        },{
          type: "info"
        });
      });
        
        $('#logout').click(function(){
        if(confirm('Are you sure to logout')) {
        return true;
        }

        return false;
        });

    
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </body>
</html>
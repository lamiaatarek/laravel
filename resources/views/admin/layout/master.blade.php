<!DOCTYPE html>
<html>
  <head>
    @include('admin.layout.head')

    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

         @include('admin.layout.header')
      
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
         @include('admin.layout.sidebar')
      </aside>

      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
      
          <!-- Info boxes -->
          @yield('content')
          
                  

     @include('admin.layout.footer')
    
  </body>
</html>

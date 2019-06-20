@include('layouts.admin.head')

<div class="wrapper">
    <header class="main-header">
      <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>VS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MOVIS</b></span>
      </a>
      @include('layouts.admin.headernav')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          @include('layouts.admin.sidebarmenu')
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
        <div class="pull-right hidden-xs">
            E-Office
        </div>
        <strong>MOVIS | &copy; 2019  - Politeknik Negeri Semarang</strong>
    </footer>
    <div class="control-sidebar-bg"></div>   
</div>
<!-- ./wrapper -->
@include('layouts.admin.footer')


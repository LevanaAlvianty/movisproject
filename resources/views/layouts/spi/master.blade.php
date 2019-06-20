@include('layouts.spi.head')

  <body class="app sidebar-mini rtl">
  <!-- top navigation -->
  <!-- Navbar-->
    <header class="app-header">
      <a class="app-header__logo" href="">Movis</a>
        @include('layouts.spi.headernav')
    </header>
  <!-- /top navigation -->

  <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      @include('layouts.spi.sidebarmenu')
    </div>
  <!-- /sidebar menu -->

  <!-- page content -->  
    <main class="app-content">
        <div class="app-title">
            @yield('judulapp')
        </div>
            @yield('content')
    </main>
  <!-- /page content -->

  <!-- footer content -->
    <footer class="main-footer">
      <!-- To the right -->
        <div class="pull-right hidden-xs">
            E-Office
        </div>
        <strong>MOVIS | &copy; 2019  - Politeknik Negeri Semarang</strong>
    </footer>
  <!-- /footer content -->

@include('layouts.spi.footer')
  

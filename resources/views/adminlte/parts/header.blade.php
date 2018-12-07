  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('admin.home') }}" class="logo">
     
      <span class="logo-mini"><b>A</b>LT</span>
     
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      @include('adminlte.widgets.toggle-nav')
          <!-- Navbar Right Menu -->
          @include('adminlte.widgets.navbar-right')
          <!-- User Account Menu -->
          @include('adminlte.widgets.user-account')
          <!-- Control Sidebar Toggle Button -->
          @include('adminlte.widgets.control-sidebar-toggle')
    </nav>
</header>
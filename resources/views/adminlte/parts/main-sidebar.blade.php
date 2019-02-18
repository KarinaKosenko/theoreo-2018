 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      @include('adminlte.widgets.user-panel')

      <!-- search form (Optional) -->
      @include('adminlte.widgets.search-form')
    
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('admin.actions')}}"><i class="fa fa-link"></i> <span>Управление акциями</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Управление брендами</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Модерация контента</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Управление пользователями</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Биллинг</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Поисковые запросы</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Логи парсера</span></a></li>
           <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
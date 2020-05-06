<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="menu-sidebar">
          <a href="{{ url('/kelola-gedung') }}">
            <i class="fa fa-building"></i>
            <span>Kelola Gedung</span>
          </a>
        </li>

        <li class="menu-sidebar">
          <a href="{{ url('/kelola-jadwal') }}">
            <i class="fa fa-calendar-check-o"></i>
            <span>Kelola Jadwal</span>
          </a>
        </li>

        <li class="menu-sidebar">
          <a href="{{ url('/kelola-peminjaman') }}">
            <i class="fa fa-pencil"></i>
            <span>Kelola Peminjaman</span>
          </a>
        </li>

        <li class="menu-sidebar">
          <a href="{{ url('/export') }}">
            <i class="fa fa-print"></i>
            <span>Export Peminjaman</span>
          </a>
        </li>

        <li class="header">OTHER</li>

        <li class="menu-sidebar">
          <a href="{{ url('/keluar') }}">
            <i class="glyphicon glyphicon-log-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
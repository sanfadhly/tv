<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Radja Andorid</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="{{ route('category.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-open">
            <a href="{{ route('chanel.index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>List Chanel</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('config.index') }}" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Setting</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

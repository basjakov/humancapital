<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="https://humancapital.am/imags/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HumanCapital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Կայքի հետ աշխատանք
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                <i class="fab fa-google"></i>
                  <p>Google Analytics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://my.fastcomet.com/clientarea.php" class="nav-link" target="_blank">
                  <i class="fas fa-server"></i>
                  <p>Սերվեր կամ հոստինգ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('jobs.index')}}" class="nav-link">
              <i class="fas fa-scroll"></i>
              <p>
              Աշխատանք
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('training.index')}}" class="nav-link">
               <i class="fas fa-graduation-cap"></i>
              <p>
              Դասընթաց
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('blog.index')}}" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
              <p>
              Բլոգ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('AdminCandidate')}}" class="nav-link">
                <i class="far fa-address-card"></i>
              <p>
              Թեկնածուներ
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

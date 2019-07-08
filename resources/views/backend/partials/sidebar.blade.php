<nav class="sidebar sidebar-offcanvas">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">GENERAL</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('msadmin') }}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                <span class="menu-title">Page Layouts</span>
                <i class="icon-size-actual menu-icon"></i>
              </a>
              <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">FEATURES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#child-fe" aria-expanded="false" aria-controls="child-fe">
                <span class="menu-title">Children Management</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="child-fe">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.childForm') }}">Add Child</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.childList') }}">Child List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item inactive">
              <a class="nav-link" data-toggle="collapse" href="#page-fe" aria-expanded="false" aria-controls="page-fe">
                <span class="menu-title">Sponsor Management</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="page-fe">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.childList') }}">Sponsor List</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sponsor.form') }}">Add Add Sponsor</a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#user_fe" aria-expanded="false" aria-controls="user_fe">
                <span class="menu-title">User Management</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="user_fe">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}">Add User</a></li>
                  
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        
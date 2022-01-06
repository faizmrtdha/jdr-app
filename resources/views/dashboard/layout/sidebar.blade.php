<div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper">
        <a href="index.html">
          <img class="img-fluid for-light" src="/assets/images/logo/logo.png" alt="" />
          <img class="img-fluid for-dark" src="/assets/images/logo/logo_dark.png" alt="" />
          {{-- <a href="index.html"><img class="img-fluid for-light" src="/img/jdr.png" alt="" /></a> --}}
        </a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar">
          <i class="status_toggle middle sidebar-toggle" data-feather="grid">
          </i>
        </div>
      </div>
      <div class="logo-icon-wrapper">
        <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="" /></a>

      </div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
          <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="" /></a>
              <div class="mobile-back text-end">
                <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
              </div>
            </li>
            <li class="sidebar-list">
              <a class="sidebar-link sidebar-title link-nav {{
                Request::is('/dashboard*') ? 'active' : ''
                }}" href="/dashboard">
                <i data-feather="home"></i>
                <span class="lan-3">Dashboard </span>
              </a>
            </li>


            @can('viewAny', \App\Models\Quotes::class)
            <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i>
                <span>Content Management</span>
              </a>
              <ul class="sidebar-submenu">
                <li><a href="/dashboard/home" class="{{
                  Request::is('dashboard/home*') ? 'active' : ''
                  }}">Home</a></li>
                <li><a href="/dashboard/profile" class="{{
                  Request::is('dashboard/profile*') ? 'active' : ''
                  }}">Profile</a>
                </li>
              </ul>
            </li>
            @endcan

            @can('viewAny', \App\Models\User::class)
            <li class="sidebar-list">
              <a class="sidebar-link sidebar-title link-nav {{
                Request::is('/dashboard/user-management*') ? 'active' : ''
                }}" href="/dashboard/user-management">
                <i data-feather="users"></i>
                <span>User Management </span>
              </a>
            </li>
            @endcan

            @can('viewAny', \App\Models\Roles::class)
              <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav {{
                  Request::is('/dashboard/role') ? 'active' : ''
                  }}" href="/dashboard/role">
                  <i data-feather="users"></i>
                  <span>Role Management </span>
                </a>
              </li>
            @endcan

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
          <i data-feather="arrow-right"></i>
        </div>
      </nav>
    </div>
  </div>

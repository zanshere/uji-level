      <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                  <a href="assets/vendor/stisla/dist/index.html">Stisla</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                  <a href="assets/vendor/stisla/dist/index.html">St</a>
              </div>
              <ul class="sidebar-menu">
                    <li class="{{ request()->is('dashboard') ? 'active bg-blue-600 text-white' : 'hover:bg-gray-200' }}">
                        <a class="nav-link flex items-center gap-2 p-2" href="/dashboard">
                            <i class="fas fa-th-large {{ request()->is('dashboard') ? 'text-black' : 'text-gray-500' }}"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                  <li class="menu-header">Starter</li>
                    <li class="{{ request()->is('dashboard/events') ? 'active bg-blue-600 text-white' : 'hover:bg-gray-200' }}">
                        <a class="nav-link flex items-center gap-2 p-2" href="/dashboard/events">
                            <i class="far fa-calendar {{ request()->is('dashboard/events') ? 'text-black' : 'text-gray-500' }}"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('dashboard/orders') ? 'active bg-blue-600 text-white' : 'hover:bg-gray-200' }}">
                        <a class="nav-link flex items-center gap-2 p-2" href="/dashboard/orders">
                            <i class="fas fa-shopping-cart {{ request()->is('dashboard/orders') ? 'text-black' : 'text-gray-500' }}"></i>
                            <span class="">Orders</span>
                        </a>
                    </li>       
          </aside>
      </div>

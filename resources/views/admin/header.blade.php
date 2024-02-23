<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">

            <!-- Navbar Header-->
              <a href="{{route('adminhome')}}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase">
             <strong class="text-primary">Dark</strong>
                <strong>Admin</strong></div>
              <div class="brand-text brand-sm">
                <strong class="text-primary">D</strong>
                <strong>A</strong></div></a>
            
              <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>

            <!-- Log out -->
            <div class="list-inline-item logout">
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
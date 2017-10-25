
  <!-- Hero header: will stick at the top -->
  <div class="hero hero-head is-transparent">
    <header class="nav is-fixed">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item">
            <img src="images/footer-logo.png" alt="Logo">
          </a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div class="nav-right nav-menu">
          <a href="/" class="nav-item is-active">
            Home
          </a>
          <a href="about" class="nav-item">
            About
          </a>
          <a class="nav-item">
            Services
          </a>
          <a class="nav-item">
            Share
          </a>
          <a class="nav-item">
            Blog
          </a>
          <a class="nav-item">
            Contact
          </a>
        
        @if (Auth::guest())
            <span class="nav-item is-hoverable">
                <a href="{{route('register')}}" class="button is-primary is-inverted">
                <span class="icon">
                    <i class="fa fa-sign-in"></i>
                </span>
                <span>Join Portal</span>
                </a>
            </span>
         @else
            <span class="nav-item dropdown is-aligned-right is-tab">
                <a href="{{route('register')}}" class="button is-warning is-inverted">
                  <span class="icon">
                      <i class="fa fa-sign-out"></i>
                  </span>
                  <span>My Portal</span>
                </a>

                {{--  Submenu  --}}
                <ul class="dropdown-menu" style="overflow: visible;">
                    <li><a href="#">
                        <span class="icon">
                            <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                        </span>Profile
                        </a>
                    </li>
                    <li><a href="#">
                        <span class="icon">
                            <i class="fa fa-fw fa-bell m-r-5"></i>
                        </span>Notifications
                        </a>
                    </li>
                    <li><a href="{{route('manage.dashboard')}}">
                        <span class="icon">
                            <i class="fa fa-fw fa-cog m-r-5"></i>
                        </span>Manage
                        </a>
                    </li>
                    <li class="seperator"></li>
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <i class="fa fa-fw fa-sign-out m-r-5"></i>
                        </span>
                        Logout
                        </a>
                        @include('_includes.forms.logout')
                    </li>
                </ul>
            </span>

          @endif 
        
        </div>
      </div>
    </header>
  </div>




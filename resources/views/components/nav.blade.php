<nav class="navbar">
    <!-- nav left -->
    <div>
        <a href="#" class="mdi mdi-menu mr-1 offcanvas-toggle" data-offcanvas="offcanvas-menu"></a>
        <a href="{{ route('index') }}" class="font-weight-bold">CMS</a>
    </div>
    <!-- nav right -->
    <div>
        @guest
            <a href="{{ route('login') }}" class="mr-2">
                <i class="mdi mdi-login-variant mr-1"></i>Login
            </a>
            <a href="{{ route('register') }}" class="mr-2">
                <i class="mdi mdi-account-plus mr-1"></i>Register
            </a>
        @else
            <div class="dropdown d-inline">
                <a href="#" data-toggle="dropdown">
                    <img src="#" data-src="holder.js/32x32?theme=sky&text=32" class="rounded-circle" width="32" height="32">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item offcanvas-toggle" data-offcanvas="offcanvas-profile">
                        <i class="mdi mdi-account mr-1"></i>Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout-variant mr-1"></i>Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
    </div>
</nav>
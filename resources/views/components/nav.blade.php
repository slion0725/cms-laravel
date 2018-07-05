<nav class="navbar">
    <!-- nav left -->
    <div>
        @auth
            <a class="mdi mdi-menu mr-1 offcanvas-toggle" data-offcanvas="offcanvas-menu" href="javascript:;"></a>
        @endauth
        <a class="font-weight-bold" href="{{ route('index') }}">CMS</a>
    </div>
    <!-- nav right -->
    <div>
        @guest
            <a class="mr-2" href="{{ route('login') }}">
                <i class="mdi mdi-login-variant mr-1"></i>Login
            </a>
            <a class="mr-2" href="{{ route('register') }}">
                <i class="mdi mdi-account-plus mr-1"></i>Register
            </a>
        @else
            <div class="dropdown d-inline">
                <a data-toggle="dropdown" href="javascript:;">
                    <img class="rounded-circle" data-src="holder.js/32x32?theme=sky&text=32" src="{{ Auth::user()->avater ? asset('/storage') . '/' . Auth::user()->avater : '#' }}" width="32" height="32">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <v-profile-btn></v-profile-btn>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
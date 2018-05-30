<div class="off-canvas off-canvas-left off-canvas-effect" id="offcanvas-menu">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Menu
        </div>
        <div class="card-body align-self-stretch p-0 menu">
            <ul class="nav flex-column collapse-parent">

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-dashboard">Dashboard</a>
                    <div class="collapse layer-color collapse-dashboard" data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="javascript:;" class="nav-link">Finder</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link">Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-management">Management</a>
                    <div class="collapse layer-color collapse-management{{in_array(Route::currentRouteName(),['accounts.index']) ? ' show' : ''}}" data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="{{ route('accounts.index') }}" class="nav-link{{Route::currentRouteName() == 'accounts.index' ? ' active' : ''}}">Accounts</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link">Assign Roles</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link">Roles</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!--
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-all-pages">All Pages</a>
                    <div class="collapse layer-color collapse-all-pages show" data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="/" class="nav-link">Index</a>
                            </li>
                            <li>
                                <a href="login" class="nav-link">Login</a>
                            </li>
                            <li>
                                <a href="register.html" class="nav-link">Register</a>
                            </li>
                            <li>
                                <a href="password_sendlink.html" class="nav-link">Password Sendlink</a>
                            </li>
                            <li>
                                <a href="password_reset.html" class="nav-link">Password Reset</a>
                            </li>
                            <li>
                                <a href="table.html" class="nav-link active">Table</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-a">Layer A</a>
                    <div class="collapse layer-color collapse-a" data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="javascript:;" class="nav-link">Layer B-1</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-b-2">Layer B-2</a>
                                <div class="collapse layer-color collapse-b-2" data-parent=".collapse-a">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="javascript:;" class="nav-link">Layer C-1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-c-2">Layer C-2</a>
                                            <div class="collapse layer-color collapse-c-2" data-parent=".collapse-b-2">
                                                <ul class="nav flex-column">
                                                    <li>
                                                        <a href="javascript:;" class="nav-link">Layer D-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" class="nav-link">Layer D-2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                -->
            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="javascript:;" class="text-secondary btn-offcanvas-close">Close</a>
        </div>
    </div>
</div>
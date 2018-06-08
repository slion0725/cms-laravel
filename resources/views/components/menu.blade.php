<div class="off-canvas off-canvas-left off-canvas-effect" id="offcanvas-menu">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Menu
        </div>
        <div class="card-body align-self-stretch p-0 menu">
            <ul class="nav flex-column collapse-parent">

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-list">List</a>
                    <div class="collapse layer-color collapse-list{{in_array(Route::currentRouteName(),['dashboard.index']) ? ' show' : ''}}"
                        data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="{{ route('dashboard.index') }}" class="nav-link{{Route::currentRouteName() == 'dashboard.index' ? ' active' : ''}}">Dashboard</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link">Finder</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="nav-link">Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                @role('admin')
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link" data-toggle="collapse" data-target=".collapse-management">Management</a>
                    <div class="collapse layer-color collapse-management{{in_array(Route::currentRouteName(),['accounts.index', 'assign-roles.index', 'roles.index', 'activity-log.index', 'permissions.index']) ? ' show' : ''}}"
                        data-parent=".collapse-parent">
                        <ul class="nav flex-column">
                            <li>
                                <a href="{{ route('accounts.index') }}" class="nav-link{{Route::currentRouteName() == 'accounts.index' ? ' active' : ''}}">Accounts</a>
                            </li>
                            <li>
                                <a href="{{ route('assign-roles.index') }}" class="nav-link{{Route::currentRouteName() == 'assign-roles.index' ? ' active' : ''}}">Assign Roles</a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}" class="nav-link{{Route::currentRouteName() == 'roles.index' ? ' active' : ''}}" class="nav-link">Roles</a>
                            </li>
                            <li>
                                <a href="{{ route('permissions.index')}}" class="nav-link{{Route::currentRouteName() == 'permissions.index' ? ' active' : ''}}">Permissions</a>
                            </li>
                            <li>
                                <a href="{{ route('activity-log.index') }}" class="nav-link{{Route::currentRouteName() == 'activity-log.index' ? ' active' : ''}}">Activity Log</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endrole

            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="javascript:;" class="text-secondary btn-offcanvas-close">Close</a>
        </div>
    </div>
</div>
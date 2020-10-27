<li class="{{ strpos($routeName, 'backend.admin') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-lock"></i>
        <span class="menu-text">
                    Admin
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.admin.index') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.admin.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Users
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.admin.create') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.admin.create')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Add User
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>

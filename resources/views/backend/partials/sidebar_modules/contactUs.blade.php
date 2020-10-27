<li class="{{ strpos($routeName, 'backend.contactUs') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-lock"></i>
        <span class="menu-text">
                    Manage Contact
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.contactUs.index') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.contact.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Contact Information
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>

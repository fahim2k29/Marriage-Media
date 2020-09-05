<li class="{{ strpos($routeName, 'backend.order') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-shopping-cart"></i>
        <span class="menu-text">
                   Blog
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'backend.order.index' ? 'open' : ''}}">
            <a href="{{ route('backend.order.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Success Stories
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
    <!-- <ul class="submenu">
        <li class="{{ $routeName === 'backend.order.delivery' ? 'open' : ''}}">
            <a href="{{ route('backend.order.delivery') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Winners
            </a>
            <b class="arrow"></b>
        </li>
    </ul> -->
</li>

<li class="{{ strpos($routeName, 'backend.purchase.') === 0 ? 'open active' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-shopping-bag"></i>
        <span class="menu-text">
                    Package
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ strpos($routeName, 'backend.purchase.purchases') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.site_config.offer.index')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Packages
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ strpos($routeName, 'backend.purchase.sources') === 0 ? 'open' : ''}}">
            <a href="{{route('backend.site_config.offer.create')}}">
                <i class="menu-icon fa fa-caret-right"></i>
                Add Package
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>

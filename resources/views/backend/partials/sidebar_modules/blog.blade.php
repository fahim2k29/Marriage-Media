<li class="{{ strpos($routeName, 'backend.blog') === 0 ? 'active open' : ''}}">
    <a href="#" class="dropdown-toggle">
        <i class="menu-icon fa fa-shopping-cart"></i>
        <span class="menu-text">
                   Blog
        </span>
        <b class="arrow fa fa-angle-down"></b>
    </a>
    <b class="arrow"></b>
    <ul class="submenu">
        <li class="{{ $routeName === 'backend.blog.index' ? 'open' : ''}}">
            <a href="{{ route('backend.blog.index') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Success Stories
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
  <ul class="submenu">
        <li class="{{ $routeName === 'backend.blog.create' ? 'open' : ''}}">
            <a href="{{ route('backend.blog.create') }}">
                <i class="menu-icon fa fa-caret-right"></i>
                Story Create
            </a>
            <b class="arrow"></b>
        </li>
    </ul>
</li>

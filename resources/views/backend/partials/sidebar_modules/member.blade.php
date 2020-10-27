  
        <li class="{{ strpos($routeName, 'backend.member') === 0 ? 'active open' : ''}}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-text">
                   Member
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'backend.member.index' ? 'open' : ''}}">
                    <a href="{{ route('backend.member.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        All Member
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            
        </li>

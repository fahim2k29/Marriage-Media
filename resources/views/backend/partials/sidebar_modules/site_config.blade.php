     {{-- Site Config [Site info, about-us,Banner, Slider] --}}
        <li class="{{ strpos($routeName, 'backend.site_config') === 0 ? 'active open' : ''}}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">
                    Site Config
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="{{ $routeName === 'backend.site_config.slider' ? 'open' : ''}}">
                    <a href="{{route('backend.site_config.slider.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                       Slider
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
            

            <ul class="submenu">
                <li class="{{ $routeName === 'backend.site_config.quick-page' ? 'open' : ''}}">
                    <a href="{{route('backend.site_config.quick-page.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                       quick Pages
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>


            <ul class="submenu">
                <li class="{{ $routeName === 'backend.site_config.info' ? 'open' : ''}}">
                    <a href="{{route('backend.site_config.info')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                       Configuration
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>

        </li>

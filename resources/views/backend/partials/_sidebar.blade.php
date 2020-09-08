<div id="sidebar" class="sidebar responsive ace-save-state menu-min">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {
        }
    </script>

    @php
        $routeName = request()->route()->getName();
    @endphp

    <ul class="nav nav-list">
        {{-- Dashboard --}}
        @include('backend.partials.sidebar_modules.dashboard')

        {{-- Blog --}}
        @include('backend.partials.sidebar_modules.blog')

        {{-- Package --}}
        @include('backend.partials.sidebar_modules.package')

        {{-- Product --}}
        {{-- @include('backend.partials.sidebar_modules.product') --}}

         {{-- Customer --}}
        @include('backend.partials.sidebar_modules.member')

        {{-- Site Config --}}
        @include('backend.partials.sidebar_modules.site_config')

        {{-- Admin --}}
        @include('backend.partials.sidebar_modules.admin')

        
    </ul>

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
           data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>

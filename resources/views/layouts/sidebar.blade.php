    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="/">PROGNET</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="/">PG</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Master Data</li>
                <li class="{{ request()->path() == 'provinsi' ? 'active' : '' }} ">
                    <a class="nav-link" href="{{ route('provinsi.index') }}">
                        <i class="fas fa-archway"></i> <span>Provinsi</span>
                    </a>
                </li>

                <li class="{{ request()->path() == 'kabupaten' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('kabupaten.index') }}">
                        <i class="fas fa-university"></i> <span>Kabupaten</span>
                    </a>
                </li>
        </aside>
    </div>

<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}" class="nav-link">
        <i class=" fas fa-building"></i><span>Simple CRUD OPS</span>
    </a>
</li>

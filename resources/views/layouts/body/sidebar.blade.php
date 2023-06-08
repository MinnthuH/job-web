<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Company Name</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">CP</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <a href="{{ route('all.category') }}">All Category</a>
                    <a href="{{ route('create.category') }}">Add Category</a>
                </ul>
            </li>


            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getcodiepie.com/docs" onclick="document.getElementById('logOut').submit()"
                    class="btn btn-danger btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i>
                    Logout</a>

                <form class="d-none" id="logOut" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </div>
        </ul>
    </aside>
</div>

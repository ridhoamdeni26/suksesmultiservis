<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <div style="background:#24557E;padding:10px 10px 8px 10px;color:#fff; word-wrap: break-word; font-weight:600; font-size:1rem;">{{ session()->get( 'session.name_') }}</div>
                <li>
                    <a href="{{ route('dashboard.all') }}">
                    <i data-feather="bar-chart"></i>
                        <span data-key="t-product">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('outlets.index') }}">
                    <i data-feather="user"></i>
                        <span data-key="t-product">Outlet</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                    <i data-feather="bar-chart"></i>
                        <span data-key="t-dashboard">Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="film"></i>
                        <span data-key="t-multi-level">Digital</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="#" data-key="t-level-1-1">News</a></li>
                        <li><a href="#" data-key="t-level-1-2">Promo</a></li>
                    </ul>
                </li> -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
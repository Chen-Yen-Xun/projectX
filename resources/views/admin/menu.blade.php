<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item{{ Request::is('admin/member/*') ? " menu-open" : "" }}">
            <a href="#" class="nav-link{{ Request::is('admin/member/*') ? " active" : "" }}">
            <i class="nav-icon fas fa-solid fa-users"></i>
                <p>
                    會員
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/member/list" class="nav-link{{ Request::is('admin/member/list') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>會員資料列表</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item{{ Request::is('admin/chart/*') ? " menu-open" : "" }}">
            <a href="#" class="nav-link{{ Request::is('admin/chart/*') ? " active" : "" }}">
            <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    圖表
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/chart/chart" class="nav-link{{ Request::is('admin/chart/chart') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>圖表 - 會員分析</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="/admin/map/map" class="nav-link{{ Request::is('admin/map/*') ? " active" : "" }}">
            <i class="nav-icon fas fa-solid fa-map-location-dot"></i>
            <p>
                地圖
            </p>
            </a>
        </li>
    </ul>
</nav>
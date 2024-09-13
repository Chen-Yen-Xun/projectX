<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/admin/notice/list" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    注意事項
                    <!--<span class="right badge badge-danger">New</span>-->
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/qa/list" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    QA
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/product/list" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    產品介紹
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/prize/list" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    獎項
                </p>
            </a>
        </li>
        <li class="nav-item{{ Request::is('admin/act/*') ? " menu-open" : "" }}">
            <a href="#" class="nav-link{{ Request::is('admin/act/*') ? " active" : "" }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    活動
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/admin/act/list" class="nav-link{{ Request::is('admin/act/list') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>活動說明</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/act/photo/list" class="nav-link{{ Request::is('admin/act/photo/*') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>活動方式圖檔</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/act/layer1/list" class="nav-link{{ Request::is('admin/act/layer1/*') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>活動方式</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/act/layer2/list" class="nav-link{{ Request::is('admin/act/layer2/*') ? " active" : "" }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>活動步驟</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/charts/chartjs.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ChartJS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Flot</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/inline.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inline</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/charts/uplot.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>uPlot</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
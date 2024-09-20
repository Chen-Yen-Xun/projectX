<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>長平塗裝 - 控制台</title>

    <!-- Google Font: Audiowide -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/css/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/css/summernote-bs4.min.css">
    <!-- Bootstrap 如果不連新版 按鈕顏色有問題 -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin/sweetalert2.min.css">
    <link rel="stylesheet" href="/css/myall.css">
    <script src="/js/admin/sweetalert2.all.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            // #:代表id
            $("#all").click(function() {
                // 在很多程式語言中都有this, this代表這個物件
                if ($(this).is(":checked")) {
                    // .:代表class
                    // attr:屬性
                    // 當id為all的checkbox被選取時,所有class為chk的都被選取
                    //這裡會有class而不是用id的原因為, 不知道有多少的選項要被選取, 無法得知所有id
                    $(".chk").attr("checked", true);
                } else {
                    $(".chk").attr("checked", false);
                }
            });
        });

        function doDelete(formName)
        {
            if (confirm("確定刪除?"))
            {
                // document.list.submit();
                document.forms[formName].submit();
            }
        }
    </script>
    <style>
        .font_Audiowide {
            font-family: "Audiowide", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 24px;
        }

        .font_color01 {
            color: #003366;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @if(Session::has("message"))
    <script>
        swal.fire("{{ Session::get('message') }}");
    </script>
    @endif
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link" style="text-decoration: none;" title="回首頁">
                <span class="font_Audiowide me-3 text-pc-color-main03">CP</span><span class="fw-900 h4">長平塗裝</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div>
                        <i class="fa-solid fa-screwdriver-wrench text-pc-color-warn03 fa-2x ms-5"></i>
                    </div>
                    <div class="info">
                        <div class="text-white fw-700">
                        @if (Session::has('member_Username'))
                        {{ Session::get('member_Username') }}
                        @endif
                        </div>
                    </div>
                    <form method="post" action="/admin/doLogout">
                        {{ csrf_field() }}
                        <button class="btn bg-btn03 ms-3 text-white">登出</button>
                    </form>
                </div>
                <!-- Sidebar Menu -->
                @include("admin.menu")
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield("title")</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                                <li class="breadcrumb-item active">@yield("title")</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield("content")
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 <a href="/" class="font_Audiowide font_color01" style="text-decoration: none;">CP</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/js/jquery/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/js/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/js/jquery.vmap.min.js"></script>
    <script src="/js/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/js/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/js/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/js/dashboard.js"></script>
</body>

</html>
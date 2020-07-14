<html>

<head>
    <title>Admin page</title>

    <!-- Bootstrap -->
    <link href="../public/vendors//bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../public/vendors//font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../public/vendors//nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../public/vendors//bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../public/build//css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Beach Resort</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Xin chào</span>
                            <h2>
                            	<?php
                            		echo isset($_SESSION["account"]) ? $_SESSION["name"] : "";
                            	?>
                            </h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.php">Trang chủ</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Quản lý <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="form.html">Danh sách phòng</a></li>
                                        <li><a href="form_advanced.html">Loại phòng</a></li>
                                        <li><a href="form_validation.html">Ảnh của phòng</a></li>
                                        <li><a href="form_wizards.html">Chi tiết đặt phòng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Báo Cáo <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="chartjs.html">Doanh thu đặt phòng</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-user"></i> Tài khoản <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="tables.html">Thay đổi thông tin</a></li>
                                        <li><a href="tables_dynamic.html">Thoát </a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <?php
                            		echo isset($_SESSION["account"]) ? $_SESSION["name"] : "";
                            		?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Thông tin</a>
                                    <a class="dropdown-item" href="index.php?act=logout"><i class="fa fa-sign-out pull-right"></i>
                                        Đăng Xuất</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <form>
                
            </form>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Web đặt phòng
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../public/vendors//jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../public/vendors//bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../public/vendors//fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../public/vendors//nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../public/vendors//Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../public/vendors//jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../public/vendors//Flot/jquery.flot.js"></script>
    <script src="../public/vendors//Flot/jquery.flot.pie.js"></script>
    <script src="../public/vendors//Flot/jquery.flot.time.js"></script>
    <script src="../public/vendors//Flot/jquery.flot.stack.js"></script>
    <script src="../public/vendors//Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../public/vendors//flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../public/vendors//flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../public/vendors//flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../public/vendors//DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../public/vendors//moment/min/moment.min.js"></script>
    <script src="../public/vendors//bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../public/build//js/custom.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Drora - Bootstrap Restaurant Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../RDashboard/assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../RDashboard/assets/plugins/owl.carousel/dist/css/owl.carousel.min.css">
    <link href="../RDashboard/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href=".../RDashboard/assets/plugins/chartist/css/chartist.min.css">
    <link href="../RDashboard/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr">D</b>
                    <span class="brand-title"><b>Drora</b></span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="search" class="border-0" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">

                    <ul class="clearfix">
                        <li class="icons d-none d-md-flex">
                            <a href="javascript:void(0)" class="window_fullscreen-x">
                                <i class="icon-frame"></i>
                            </a>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-danger">3</span>
                            </a>
                            <div class="drop-down animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../RDashboard/assets/images/avatar/1.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey, What's up! You have a good news !!!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../RDashboard/assets/images/avatar/2.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../RDashboard/assets/images/avatar/3.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../RDashboard/assets/images/avatar/4.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">And what do you do?</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-center bg-primary px-4 text-white" href="email-inbox.html">
                                        <span>See all messagese </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-bell"></i>
                                <span class="badge badge-primary">3</span>
                            </a>
                            <div class="drop-down animated flipInX dropdown-notfication">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                        <span>All Notifications</span>
                                        <span><i class="icon-settings"></i></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <div class="user-img c-pointer-x">
                                <span class="activity active"></span>
                                <img src="../RDashboard/assets/images/user/1.png" height="40" width="40" alt="avatar">
                            </div>
                            <div class="drop-down dropdown-profile animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-calender"></i> <span>My Calender</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-envelope-open"></i> <span>My Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-paper-plane"></i> <span>My Tasks</span><div class="badge badge-pill bg-dark">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-check"></i> <span>Online</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">Admin Overview</a></li>
                            <li><a href="index-2.html">Custommer Overview</a></li>
                            <li><a href="index-3.html">Employee Overview</a></li>
                            <li><a href="restaurant-menus.html">Menus</a></li>
                            <li><a href="restaurant-offers.html">Offer</a></li>
                            <li><a href="restaurant-reservation.html">Reservation</a></li>
                            <li><a href="restaurant-employees.html">Employees</a></li>
                            <li><a href="restaurant-custommer.html">Custommer</a></li>
                            <li><a href="restaurant-order.html">Order</a></li>
                            <li><a href="restaurant-packages.html">Packages</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-layers"></i><span class="nav-text">Layouts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="layout-blank.html">Blank</a></li>
                            <li><a href="layout-one-column.html">One Column</a></li>
                            <li><a href="layout-two-column.html">Two column</a></li>
                            <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="layout-horizontal-nav.html">Horizontal</a></li>
                            <li><a href="layout-rtl.html">RTL</a></li>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-wide-boxed.html">Wide Boxed</a></li>
                            <li><a href="layout-wide.html">Wide</a></li>
                            <li><a href="layout-dark.html">Dark</a></li>
                            <li><a href="layout-light.html">Light</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-screen-smartphone"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="email-inbox.html">Mailbox</a></li>
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a href="app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a href="charts.html" aria-expanded="false"><i class="icon-chart"></i> <span class="nav-text">Charts</span></a></li>
                    <li class="nav-label">UI Components</li>
                    <li><a href="ui-bootstrap.html" aria-expanded="false"><i class="icon-diamond"></i><span class="nav-text">UI Bootstrap</span></a></li>
                    <li><a href="components.html" aria-expanded="false"><i class="icon-puzzle"></i><span class="nav-text">Components</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon-badge"></i><span class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a href="forms.html" aria-expanded="false"><i class="icon-settings"></i><span class="nav-text">Forms</span></a></li>
                    <li class="nav-label">Table</li>
                    <li><a href="tables.html" aria-expanded="false"><i class="icon-briefcase"></i><span class="nav-text">Table</span></a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-globe"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-user-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Erorr</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="page-error-400.html">Erorr 400</a></li>
                                    <li><a href="page-error-403.html">Erorr 403</a></li>
                                    <li><a href="page-error-404.html">Erorr 404</a></li>
                                    <li><a href="page-error-500.html">Erorr 500</a></li>
                                    <li><a href="page-error-503.html">Erorr 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">August 08, 2017 - August 08, 2017</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-between mb-4">
					<div class="col-xl-3 col-lg-4">
						<h2 class="page-heading">Hi,Welcome Back!</h2>
						<p class="mb-0">Your restaurent admin template</p>
                    </div>
                    <div class="col-xl-9 col-xxl-9 col-lg-8 mt-4 mt-lg-0">
                        <div class="steps">
                            <ul class="list-unstyled multi-steps">
                                <li>Ordered</li>
                                <li>Pending</li>
                                <li class="is-active">Accept</li>
                                <li>Delivery</li>
                                <li>Received</li>
                            </ul>
                        </div> 
                    </div>
    
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-sm-6 col-xxl-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="text-muted mb-3">Order</h4>
                                            </div>
                                            <div class="col-auto">
                                                <h2>2,250</h2>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-success"><i class="mdi mdi-arrow-up-bold"></i> 6.365% </span>
                                            <p> Since last month</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="home_chart_widget_1" class="home_chart_widget chart-one"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="text-muted mb-3">Pending</h4>
                                            </div>
                                            <div class="col-auto">
                                                <h2>2,250</h2>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-danger"><i class="mdi mdi-arrow-down-bold"></i> 2.65% </span>
                                            <p> Since last month</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="home_chart_widget_2" class="home_chart_widget chart-two"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="text-muted mb-3">Revenue</h4>
                                            </div>
                                            <div class="col-auto">
                                                <h2>$2,250</h2>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-danger"><i class="mdi mdi-arrow-down-bold"></i> 23.65% </span>
                                            <p> Since last month</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="home_chart_widget_3" class="home_chart_widget chart-three"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="text-muted mb-3">Expense</h4>
                                            </div>
                                            <div class="col-auto">
                                                <h2>$ 1,475</h2>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-success"><i class="mdi mdi-arrow-up-bold"></i> 47.5% </span>
                                            <p> Since last month</p>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <div id="home_chart_widget_4" class="home_chart_widget chart-four"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title mb-4">Earnings</h4>
                                <canvas id="earnings_bar_chart"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="top_menu_carousel owl-carousel" id="top_menu_carousel">
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../../assets/images/menu/granny-menu10.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title">French Crostini</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu11.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Fried Egg Sandwich</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu12.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Pizza Hot Chilli</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu13.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Lemon Yogurt</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src=../RDashboard/assets/images/menu/granny-menu14.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Multigrain Hot Cereal</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu15.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Branch Special</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu16.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Multigrain Hot Cereal</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu5.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Fried Egg Sandwich</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card vertical-card__menu">
                                <div class="card-header p-0">
                                    <div class="vertical-card__menu--image">
                                        <img src="../RDashboard/assets/images/menu/granny-menu6.jpg" alt="Menu">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="vertical-card__menu--desc">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="vertical-card__menu--title m-0">Multigrain Hot Cereal</h5>
                                            <h4>
                                                <span class="badge badge-primary">$ 54</span>
                                            </h4>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <p class="mb-0"><span>Ordered:</span> <strong class="text-dark">179</strong></p>
                                            <p class="mb-0"><span>Revenue:</span>  <strong class="text-dark">$1300</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title">Restaurent Rating</h4>
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs justify-content-end">
                                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#success1">Graph</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#info1">Review</a></li>
                                    </ul>
                                    <div class="tab-content tab-content-default">
                                        <div class="tab-pane fade active show" id="success1" role="tabpanel">
                                            <div class="row justify-content-between">
                                                <div class="col-md-6">
                                                    <canvas id="user_rating_graph"></canvas>
                                                </div>
                                                <div class="col-md-5">
                                                    <div>
                                                        <div class="d-flex justify-content-between">
                                                            <p>Food</p>
                                                            <p><b class="text-dark">220 </b> (10%)</p>
                                                        </div>
                                                        <div class="progress mt-2" style="height: 9px;">
                                                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span></div>
                                                        </div>                
                                                    </div>
                                                    <div class="mt-4">
                                                        <div class="d-flex justify-content-between">
                                                            <p>Service</p>
                                                            <p><b class="text-dark">420</b> (40%)</p>
                                                        </div>
                                                        <div class="progress mt-2" style="height: 9px;">
                                                            <div class="progress-bar bg-info" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span></div>
                                                        </div>                
                                                    </div>
                                                    <div class="mt-4">
                                                        <div class="d-flex justify-content-between">
                                                            <p>Waiting Time</p>
                                                            <p><b class="text-dark">260</b> (30%)</p>
                                                        </div>
                                                        <div class="progress mt-2" style="height: 9px;">
                                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span></div>
                                                        </div>                
                                                    </div>
                                                    <div class="mt-4">
                                                        <div class="d-flex justify-content-between">
                                                            <p>Others</p>
                                                            <p><b class="text-dark">460</b> (20%)</p>
                                                        </div>
                                                        <div class="progress mt-2" style="height: 9px;">
                                                            <div class="progress-bar bg-dark" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span></div>
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="info1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="media">
                                                        <img src="../RDashboard/assets/images/avatar/1.jpg" width="35" alt="reviewer">
                                                        <div class="media-body ml-4">
                                                            <div class="d-flex justify-content-between">
                                                                <strong>Antony Jonus</strong>
                                                                <div class="vertical-card__menu--rating c-pointer">
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, voluptatibus!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="media mt-4">
                                                        <img src="../RDashboard/assets/images/avatar/2.jpg" width="35" alt="reviewer">
                                                        <div class="media-body ml-4">
                                                            <div class="d-flex justify-content-between">
                                                                <strong>Antony Jonus</strong>
                                                                <div class="vertical-card__menu--rating c-pointer">
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, voluptatibus!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="media mt-4">
                                                        <img src="../RDashboard/assets/images/avatar/1.jpg" width="35" alt="reviewer">
                                                        <div class="media-body ml-4">
                                                            <div class="d-flex justify-content-between">
                                                                <strong>Antony Jonus</strong>
                                                                <div class="vertical-card__menu--rating c-pointer">
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, voluptatibus!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="media mt-4">
                                                        <img src="../RDashboard/assets/images/avatar/2.jpg" width="35" alt="reviewer">
                                                        <div class="media-body ml-4">
                                                            <div class="d-flex justify-content-between">
                                                                <strong>Antony Jonus</strong>
                                                                <div class="vertical-card__menu--rating c-pointer">
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star"></i></span>
                                                                    <span class="icon"><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, voluptatibus!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visit Hour</h4>
                                <div class="row mb-3 mt-4">
                                    <div class="col text-center">
                                        <p class="mb-2 text-dark">Day</p>
                                        <h4><span class="text-success mdi mdi-arrow-up-bold"></span> 82.24 %</h4>
                                    </div>
                                    <div class="col text-center">
                                        <p class="mb-2 text-dark">Night</p>
                                        <h4><span class="text-danger mdi mdi-arrow-down-bold"></span> 12.24 %</h4>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    <canvas id="visitor_graph"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-4 col-lg-5 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Timeline</h4>
                                <div id="timeline-activity">
                                    <ul class="timeline mb-0">
                                        <li>
                                            <div class="timeline-badge bg-primary"></div>
                                            <a href="#" class="timeline-panel">
                                                <span>10 minutes ago</span>
                                                <h5 class="mt-2">New Order received</h5>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge bg-success"></div>
                                            <a href="#" class="timeline-panel">
                                                <span>20 minutes ago</span>
                                                <h5 class="mt-2">5 Orders Delivered</h5>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge bg-warning"></div>
                                            <a href="#" class="timeline-panel">
                                                <span>30 minutes ago</span>
                                                <h5 class="mt-2">3 New Tickets</h5>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge bg-danger"></div>
                                            <a href="#" class="timeline-panel">
                                                <span>15 minutes ago</span>
                                                <h5 class="mt-2">8 New Reviews</h5>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge bg-pink"></div>
                                            <a href="#" class="timeline-panel">
                                                <span>15 minutes ago</span>
                                                <h5 class="mt-2">50 New Facebook likes</h5>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-xxl-8">
                        <div class="card world_map_card">
                            <div class="card-body">
                                <h4 class="card-title">Branches</h4>
                                <div class="row">
                                    <div class="col-xl-9 col-xxl-12">
                                        <div class="map">
                                            <div id="world-datamap"></div>                                    
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-xxl-12">
                                        <div class="d-flex justify-content-center h-100 flex-column">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Canada <span class="badge badge-primary">$ 999</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    USA <span class="badge badge-secondary">$ 500</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Saudi Arabia <span class="badge badge-success">$ 900</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Bangladesh <span class="badge badge-info">$ 500</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Russia <span class="badge badge-warning">$ 250</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    Australia <span class="badge badge-danger">$ 700</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-xxl-6">
                        <div class="card top_menu_widget">
                            <div class="card-body">
                                <h4 class="card-title">Top Menus</h4>
                                <div class="media border-bottom pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu1.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">Fried Egg Sandwich</h5>
                                        <span>Egg, Sandwich</span>
                                    </div>
                                    <h5 class="badge-lighten-primary">$268</h5>
                                </div>
                                <div class="media border-bottom pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu2.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">French Crostini</h5>
                                        <span>French, Spicy</span>
                                    </div>
                                    <h5 class="badge-lighten-success">$268</h5>
                                </div>
                                <div class="media border-bottom pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu3.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">Redwine and Colddrinks</h5>
                                        <span>Drinks, Wine</span>
                                    </div>
                                    <h5 class="badge-lighten-info">$268</h5>
                                </div>
                                <div class="media border-bottom pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu4.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">Multigrain Hot Cereal</h5>
                                        <span>Hot, Spicy</span>
                                    </div>
                                    <h5 class="badge-lighten-warning">$268</h5>
                                </div>
                                <div class="media border-bottom pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu5.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">Lemon Yogurt Parfait</h5>
                                        <span>Juice, Cold</span>
                                    </div>
                                    <h5 class="badge-lighten-danger">$268</h5>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img width="50" height="50"  alt="#" class="mr-3" src="../RDashboard/assets/images/menu/menu6.png">
                                    <div class="media-body">
                                        <h5 class="mb-1 mt-sm-1 mt-0">Branch Special</h5>
                                        <span>Hot, Spicy</span>
                                    </div>
                                    <h5 class="badge-lighten-primary">$268</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body px-0">
                                <h4 class="card-title px-4 mb-3">Todo</h4>
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul id="todo_list">
                                                <li><label><input type="checkbox"><i></i><span>Decorate kitchen room</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Deliver Pizza</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>Meeting with McDonalds</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>New Branch Opening</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>New feature launching</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Meeting with KFC</span><a href='#' class="ti-trash"></a></label></li>
                                            </ul>
                                        </div>
                                        <div class="px-4">
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-xl-4 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ticket</h4>
                                <div id="ticket">
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-danger">Delivery dealyed</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-warning">Pending</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-danger">Pizza rotten</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-success">Closed</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-success">Over price</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-primary">Open</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-primary">Want new Menu</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-success">Closed</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-danger">Want new Menu</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-success">Closed</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-info">Want new Menu</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-success">Closed</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-primary">Delivery Delayed</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-primary">Open</span> -->
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-info">My order cencelled</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-success">Closed</span> -->
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <strong>#45458</strong>
                                        <div class="media-body ml-3">
                                            <a href="#">
                                                <h5 class="text-warning">App not responding</h5>
                                                <p class="mb-0">Last updated: <span>Apr 19, 2018 (10:05 AM)</span></p>
                                            </a>
                                        </div>
                                        <!-- <span class="badge badge-warning">Pending</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">  
                    <div class="col-lg-8">    
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                            event</button>
                                            
                                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                            data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal fade none-border" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"><strong>Add a category</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name"
                                                        type="text" name="category-name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white"
                                                        data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="pink">Pink</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                            data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xxl-4">
                        <div class="card performence_score">
                            <div class="card-body">
                                <h4 class="card-title">Performence Score</h4>
                                <div id="activity">
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/1.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">Mark Twine</h5>
                                            <p class="mb-0">Senior Chef</p>
                                        </div>
                                        <span class="text-dark"><b>87</b> (100)</span>
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/2.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">Spillberg</h5>
                                            <p class="mb-0">Marketing Manager</p>
                                        </div>
                                        <span class="text-dark"><b>85</b> (100)</span>
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/3.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">John Doe</h5>
                                            <p class="mb-0">Senior Waiter</p>
                                        </div>
                                        <span class="text-dark"><b>80</b> (100)</span>
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/4.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">Alex Martin</h5>
                                            <p class="mb-0">General Manager</p>
                                        </div>
                                        <span class="text-dark"><b>75</b> (100)</span>
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/5.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">Brad Hussy</h5>
                                            <p class="mb-0">Manager</p>
                                        </div>
                                        <span class="text-dark"><b>70</b> (100)</span>
                                    </div>
                                    <div class="media border-bottom pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/6.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">John Smith</h5>
                                            <p class="mb-0">Junior Chef</p>
                                        </div>
                                        <span class="text-dark"><b>67</b> (100)</span>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="../RDashboard/assets/images/avatar/7.jpg" alt="avatar" class="mr-3">
                                        <div class="media-body">
                                            <h5 class="mt-1">John Johnson</h5>
                                            <p class="mb-0">Delivery Stuff</p>
                                        </div>
                                        <span class="text-dark"><b>60</b> (100)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order List</h4>
                                <div class="table-responsive">
                                    <table class="table verticle-middle table-responsive-lg mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Order Name</th>
                                                <th scope="col">Custommer Name</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Delivery time</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>54565</td>
                                                <td>Fresh Crostini</td>
                                                <td>Adam Smith</td>
                                                <td>Gulshan</td>
                                                <td>10:20</td>
                                                <td>5</td>
                                                <td>$34</td>
                                                <td><span class="badge badge-xs badge-primary">Pending</span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>54565</td>
                                                <td>Multigrain Hot Cereal</td>
                                                <td>John Doe</td>
                                                <td>Baridhara</td>
                                                <td>3:00</td>
                                                <td>4</td>
                                                <td>$ 87</td>
                                                <td><span class="badge badge-xs badge-success">Delivered</span>
                                                </td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>54235</td>
                                                <td>French Fry</td>
                                                <td>Maximillian</td>
                                                <td>Khilgaon</td>
                                                <td>2:00</td>
                                                <td>6</td>
                                                <td>$ 65</td>
                                                <td><span class="badge badge-xs badge-dark">Cencelled</span>
                                                </td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>54587</td>
                                                <td>Fried Egg Sandwich</td>
                                                <td>John Johnson</td>
                                                <td>Gulshan</td>
                                                <td>11:00</td>
                                                <td>3</td>
                                                <td>$ 56</td>
                                                <td><span class="badge badge-xs badge-primary">Pending</span>
                                                </td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>54521</td>
                                                <td>Pizza</td>
                                                <td>Mike Hussy</td>
                                                <td>Banani</td>
                                                <td>12:00</td>
                                                <td>5</td>
                                                <td>$ 65</td>
                                                <td><span class="badge badge-xs badge-warning">Pending</span>
                                                </td>
                                                <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p><a href="templatespoint.net">Templates Point</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5-x" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <h4>Pick your style</h4>
                    <div>
                        <p>Background</p>
                        <select class="form-control" name="theme_version" id="theme_version">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div>
                        <p>Layout</p>
                        <select class="form-control" name="theme_layout" id="theme_layout">
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <select class="form-control" name="sidebar_style" id="sidebar_style">
                            <option value="full">Full</option>
                            <option value="mini">Mini</option>
                            <option value="compact">Compact</option>
                            <option value="overlay">Overlay</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar position</p>
                        <select class="form-control" name="sidebar_position" id="sidebar_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Header position</p>
                        <select class="form-control" name="header_position" id="header_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Container</p>
                        <select class="form-control" name="container_layout" id="container_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                            <option value="wide-boxed">Wide Boxed</option>
                        </select>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                    <div>
                        <p>Navigation Header</p>
                        <div>
                            <span>
                                <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                <label for="nav_header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                <label for="nav_header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                <label for="nav_header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                <label for="nav_header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                <label for="nav_header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                <label for="nav_header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                <label for="nav_header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                <label for="nav_header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                <label for="nav_header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                <label for="nav_header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Header</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                <label for="header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                <label for="header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                <label for="header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                <label for="header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                <label for="header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                <label for="header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                <label for="header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                <label for="header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                <label for="header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                <label for="header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <div>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                <label for="sidebar_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                <label for="sidebar_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                <label for="sidebar_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                <label for="sidebar_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                <label for="sidebar_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                <label for="sidebar_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                <label for="sidebar_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                <label for="sidebar_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                <label for="sidebar_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                <label for="sidebar_bg_10"></label>
                            </span>
                            <!-- <span>
                                <input type="radio" name="sidebar_bg" value="color_11" class="filled-in chk-col-primary" id="sidebar_bg_11">
                                <label for="sidebar_bg_11"></label>
                            </span> -->
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_12" class="filled-in chk-col-primary" id="sidebar_bg_12">
                                <label for="sidebar_bg_12"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_13" class="filled-in chk-col-primary" id="sidebar_bg_13">
                                <label for="sidebar_bg_13"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_14" class="filled-in chk-col-primary" id="sidebar_bg_14">
                                <label for="sidebar_bg_14"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_15" class="filled-in chk-col-primary" id="sidebar_bg_15">
                                <label for="sidebar_bg_15"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../RDashboard/assets/plugins/common/common.min.js"></script>
    <script src="../RDashboard/js/custom.min.js"></script>
    <script src="../RDashboard/js/settings.js"></script>
    <script src="../RDashboard/js/quixnav.js"></script>
    <script src="../RDashboard/js/styleSwitcher.js"></script>
    
    <!-- Datamap -->
    <script src="../RDashboard/assets/plugins/d3v3/index.js"></script>
    <script src="../RDashboard/assets/plugins/topojson/topojson.min.js"></script>
    <script src="../RDashboard/assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Calender -->
    <script src="../RDashboard/assets/plugins/jqueryui/js/jquery-ui.min.js"></script>
    <script src="../RDashboard/assets/plugins/moment/moment.min.js"></script>
    <script src="../RDashboard/assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <!-- ChartJS -->
    <script src="../RDashboard/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- MorrisJS -->
    <script src="../RDashboard/assets/plugins/raphael/raphael.min.js"></script>
    <script src="../RDashboard/assets/plugins/morris/morris.min.js"></script>
    <!-- Owl carousel -->
    <script src="../RDashboard/assets/plugins/owl.carousel/dist/js/owl.carousel.min.js"></script>
    <!-- Chartist -->
    <script src="../RDashboard/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="../RDashboard/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>


    <!-- Init files -->
    <script src="../RDashboard/js/plugins-init/fullcalendar-init.js"></script>
    <script src="../RDashboard/js/dashboard/dashboard-1.js"></script>

</body>

</html>
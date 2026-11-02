<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DS ARCADE | Dashboard</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous" />
    <!-- jsvectormap -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
        crossorigin="anonymous" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Admin Name</a></li>

                </ul>
                <!--end::Start Navbar Links-->
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                    <!--begin::Navbar Search-->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <!--end::Navbar Search-->
                    <!--begin::Messages Dropdown Menu-->

                    <!-- message popup part add hear -->

                    <!--end::Messages Dropdown Menu-->
                    <!--begin::Notifications Dropdown Menu-->

                    <!-- notification popup part add hear -->

                    <!--end::Notifications Dropdown Menu-->
                    <!--begin::Fullscreen Toggle-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <!--end::Fullscreen Toggle-->
                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                            <span class="d-none d-md-inline">User Type</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary">
                                <img
                                    src="resouse/user_logo.png"
                                    class="rounded-circle shadow"
                                    alt="Brach image" />
                                <p>
                                    User name - Admin
                                    <small>login time</small>
                                </p>
                            </li>
                            <!--end::User Image-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Help Request</a>
                                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li>
                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="./index.html" class="brand-link">
                    <!--begin::Brand Image-->
                    <img
                        src="resouse/logo.png"
                        alt="DS ARCADE Logo"
                        class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">DS ARCADE</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu----------------------------------------------------------------------------------------------->
                    <ul
                        class="nav sidebar-menu flex-column"
                        data-lte-toggle="treeview"
                        role="menu"
                        data-accordion="false">
                        <label for="" style="color: antiquewhite;">Admin Controll</label>
                        <li class="nav-item">
                            <a href="adminHome.php" class="nav-link active ">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminReport.php" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminUsermanage.php" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>User Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminpayroll.php" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Payroll</p>
                            </a>
                        </li>
                        <hr class="rounded" style="border-top: 8px solid #bbb; border-radius: 5px;">
                        <label for="" style="color: antiquewhite;">Branch Controll</label>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Invoice</p>
                            </a>
                        </li>

                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Repair Invoice
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-bar-chart-line-fill"></i>
                                        <p>Receive Repair Item</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-pass-fill"></i>
                                        <p>Complete Repair Job </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Manage Used Device
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-bar-chart-line-fill"></i>
                                        <p>Buy Used Device</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-pass-fill"></i>
                                        <p>Sell Used Device</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-pass-fill"></i>
                                        <p>Search Used Device</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item menu-close">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Stock Management
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-pass-fill"></i>
                                        <p>Add Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-bar-chart-line-fill"></i>
                                        <p>Receiving Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link ">
                                        <i class="nav-icon bi bi-pass-fill"></i>
                                        <p>Transferring Stock</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Search Product</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Expenses Management</p>
                            </a>
                        </li>
                        <hr class="rounded" style="border-top: 8px solid #bbb; border-radius: 5px;">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon bi bi-palette"></i>
                                <p>Settings</p>
                            </a>
                        </li>

                    </ul>
                    <!--end::Sidebar Menu-------------------------------------------------------------------------------------------------->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Admin Dashboard</h3>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-3 col-6">
                            <!--begin::Small Box Widget 1-->
                            <div class="small-box text-bg-primary ">
                                <div class="inner text-center">
                                    <h3>10</h3>
                                    <p>Today Mobile Phone Sales</p>
                                </div>
                                <a
                                    href="#"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                            <!--end::Small Box Widget 1-->
                        </div>
                        <!--end::Col-->
                        <div class="col-lg-3 col-6">
                            <!--begin::Small Box Widget 2-->
                            <div class="small-box text-bg-success">
                                <div class="inner text-center">
                                    <h3>Rs 500.00</h3>
                                    <p>Expenses</p>
                                </div>

                                <a
                                    href="#"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                            <!--end::Small Box Widget 2-->
                        </div>
                        <!--end::Col-->
                        <div class="col-lg-3 col-6">
                            <!--begin::Small Box Widget 3-->
                            <div class="small-box text-bg-warning">
                                <div class="inner text-center">
                                    <h3>Rs:20000.00</h3>
                                    <p>Today Income</p>
                                </div>

                                <a
                                    href="#"
                                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                            <!--end::Small Box Widget 3-->
                        </div>
                        <!--end::Col-->
                        <div class="col-lg-3 col-6">
                            <!--begin::Small Box Widget 4-->
                            <div class="small-box text-bg-dark">
                                <div class="inner text-center">
                                    <h3>Rs:16000.00</h3>
                                    <p>Today Profit</p>
                                </div>

                                <a
                                    href="#"
                                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                    More info <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                            <!--end::Small Box Widget 4-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row">
                        <!-- Start col ------------------------------------------------------------------------------->
                        <div class="col-lg-6 connectedSortable">

                            <!-- any------------------------------ -->
                            <div class="card text-white bg-dark  border-dark mb-4">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Branch wise sales</h3>

                                </div>

                                <!-- /.card-header -->

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th style="width: 400px">Branch Name</th>
                                            <th style="width:200px">Income</th>
                                            <th style="width: 200px;">Expenses</th>
                                            <th style="width: 200px;">Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="align-middle">
                                            <td>1.</td>
                                            <td>Wennappuwa</td>
                                            <td> Rs 20000</td>
                                            <td> Rs 1800</td>
                                            <td> Rs 17200</td>
                                        </tr>

                                        <tr class="align-middle">
                                            <td>2.</td>
                                            <td>Chilaw</td>
                                            <td> Rs 20000</td>
                                            <td> Rs 1800</td>
                                            <td> Rs 17200</td>
                                        </tr>

                                        <tr class="align-middle">
                                            <td>3.</td>
                                            <td>Marawila</td>
                                            <td> Rs 20000</td>
                                            <td> Rs 1800</td>
                                            <td> Rs 17200</td>
                                        </tr>

                                        <tr class="align-middle">
                                            <td>4.</td>
                                            <td>Dankotuwa</td>
                                            <td> Rs 20000</td>
                                            <td> Rs 1800</td>
                                            <td> Rs 17200</td>
                                        </tr>

                                    </tbody>

                                </table>


                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                            <!-- DIRECT CHAT -->

                            <!-- /.direct-chat -->
                        </div>
                        <!-- /.Start col -->
                        <!-- Start col -->
                        <div class="col-lg-6">
                            <div class="card direct-chat direct-chat-primary mb-4">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the start -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-start"> Alexander Pierce </span>
                                                <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img
                                                class="direct-chat-img"
                                                src="resouse/user_chat_image.png"
                                                alt="message user image" />
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                A5 Samsong -Branch Name
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                        <!-- Message to the end -->
                                        <div class="direct-chat-msg end">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                                <span class="direct-chat-timestamp float-start"> 23 Jan 2:05 pm </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img
                                                class="direct-chat-img"
                                                src="resouse/user_logo.png"
                                                alt="message user image" />
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">You better believe it!</div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                        <!-- Message. Default to the start -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-start"> Alexander Pierce </span>
                                                <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img
                                                class="direct-chat-img"
                                                src="resouse/user_chat_image.png"
                                                alt="message user image" />
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                Working with AdminLTE on a great new app! Wanna join?
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                        <!-- Message to the end -->
                                        <div class="direct-chat-msg end">
                                            <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                                <span class="direct-chat-timestamp float-start"> 23 Jan 6:10 pm </span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img
                                                class="direct-chat-img"
                                                src="resouse/user_logo.png"
                                                alt="message user image" />
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">I would love to.</div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                    </div>
                                    <!-- /.direct-chat-messages-->
                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user1-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Count Dracula
                                                            <small class="contacts-list-date float-end"> 2/28/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> How have you been? I was... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user7-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Sarah Doe
                                                            <small class="contacts-list-date float-end"> 2/23/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> I will be waiting for... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user3-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Nadia Jolie
                                                            <small class="contacts-list-date float-end"> 2/20/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> I'll call you back at... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user5-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Nora S. Vans
                                                            <small class="contacts-list-date float-end"> 2/10/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> Where is your new... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user6-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            John K.
                                                            <small class="contacts-list-date float-end"> 1/27/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> Can I take a look at... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img
                                                        class="contacts-list-img"
                                                        src="../../dist/assets/img/user8-128x128.jpg"
                                                        alt="User Avatar" />
                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Kenneth M.
                                                            <small class="contacts-list-date float-end"> 1/4/2023 </small>
                                                        </span>
                                                        <span class="contacts-list-msg"> Never mind I found... </span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contacts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                name="message"
                                                placeholder="Type Message ..."
                                                class="form-control" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary">Send</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                        </div>

                    </div>
                    <!-- /.Start col -->
                </div>
                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
    </div>
    <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
            Copyright &copy; CALLIX Software Solution&nbsp;
            <a href="http" class="text-decoration-none">CALLIXsoftware.com</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!-- OPTIONAL SCRIPTS -->
    <!-- sortablejs -->
    <script
        src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
        crossorigin="anonymous"></script>
    <!-- sortablejs -->
    <script>
        const connectedSortables = document.querySelectorAll('.connectedSortable');
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: 'shared',
                handle: '.card-header',
            });
        });

        const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = 'move';
        });
    </script>
    <!-- apexcharts -->
    <script
        src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
        crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: 'Digital Goods',
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: 'Electronics',
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: 'area',
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                type: 'datetime',
                categories: [
                    '2023-01-01',
                    '2023-02-01',
                    '2023-03-01',
                    '2023-04-01',
                    '2023-05-01',
                    '2023-06-01',
                    '2023-07-01',
                ],
            },
            tooltip: {
                x: {
                    format: 'MMMM yyyy',
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector('#revenue-chart'),
            sales_chart_options,
        );
        sales_chart.render();
    </script>
    <!-- jsvectormap -->
    <script
        src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
        crossorigin="anonymous"></script>
    <!-- jsvectormap -->
    <script>
        const visitorsData = {
            US: 398, // USA
            SA: 400, // Saudi Arabia
            CA: 1000, // Canada
            DE: 500, // Germany
            FR: 760, // France
            CN: 300, // China
            AU: 700, // Australia
            BR: 600, // Brazil
            IN: 800, // India
            GB: 320, // Great Britain
            RU: 3000, // Russia
        };

        // World map by jsVectorMap



        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
        sparkline3.render();
    </script>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>
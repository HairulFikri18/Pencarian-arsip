<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincast bootstrap 4 & angular 5 admin template, Шаблон админки | Dashboard</title>

    <!-- GLOBAL MAINLY STYLES-->
    <link href="/templates/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templates/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/templates/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet">

    <!-- THEME STYLES-->
    <link href="/templates/assets/css/main.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- CORE SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('templates.navbar')
        <!-- END HEADER-->

        <!-- START SIDEBAR-->
        @include('templates.sidebar')
        <!-- END SIDEBAR-->

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->

            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>

        <!-- PAGA BACKDROPS-->
        <div class="sidenav-backdrop backdrop"></div>
        <div class="preloader-backdrop">
            <div class="page-preloader">Loading</div>
        </div>
    </div>

    <!-- CORE PLUGINS-->
    <script src="/templates/assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/templates/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/templates/assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/templates/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- PAGE LEVEL PLUGINS-->
    <script src="/templates/assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="/templates/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/templates/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/templates/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js"></script>

    <!-- CORE SCRIPTS-->
    <script src="/templates/assets/js/app.min.js"></script>

    <!-- PAGE LEVEL SCRIPTS-->
    <script src="/templates/assets/js/scripts/dashboard_1_demo.js"></script>
</body>

</html>

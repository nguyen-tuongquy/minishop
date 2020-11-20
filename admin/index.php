<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Shop Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet" href="../Public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../Public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="../Public/admin/plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../Public/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Public/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <!-- <link href="../Public/admin/sbadmin/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <?php
        session_start();
        if (isset($_SESSION['userid']))
            $logged = $_SESSION['userid'];
        if (isset($_COOKIE['userid'])) {
            $logged = $_COOKIE['userid'];
            $_SESSION['userid'] = $_COOKIE['userid']; }
        if (!isset($logged)) {
            header('Location: login.php');
        }
        require('../Models/database.php');
        require('Layouts/header.php');
        require('Layouts/sidebar.php');
        if (isset($_GET['p'])) {
            $page = $_GET['p'];
            switch ($page) {
                case 'home':
                    require('Layouts/pages/home.php');
                    break;
                case 'list-category':
                    require('Views/Category/list.php');
                    break;
                case 'add-category':
                    require('Views/Category/add.php');
                    break;
                case 'update-category':
                    require('Views/Category/update.php');
                    break;
                case 'list-subcategory':
                    require('Views/Subcategory/list.php');
                    break;
                case 'add-subcategory':
                    require('Views/Subcategory/add.php');
                    break;
                case 'update-subcategory':
                    require('Views/Subcategory/update.php');
                    break;
                case 'list-product':
                    require('Views/Product/list.php');
                    break;
                case 'add-product':
                    require('Views/Product/add.php');
                    break;
                case 'update-product':
                    require('Views/Product/update.php');
                    break;
                case 'add-user': 
                    require('Views/User/add.php');
                    break;
                case 'list-user': 
                    require('Views/User/list.php');
                    break;
                case 'update-user': 
                    require('Views/User/update.php');
                    break;
                case 'list-order': 
                    require('Views/Order/list.php');
                    break;
                case 'update-order': 
                    require('Views/Order/update.php');
                    break;
        }
        }
        else {
            require('Layouts/pages/home.php');
        }
        require('Layouts/footer.php');
    ?>
</body>
</html>
<!-- jQuery -->
<script src="../Public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JQVMap -->
<script src="../Public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../Public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="../Public/vendor/summernote/summernote-bs4.js"></script>
<!-- overlayScrollbars -->
<script src="../Public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../Public/admin/dist/js/adminlte.js"></script>


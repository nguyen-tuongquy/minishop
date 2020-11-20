<?php 
ob_start();
if (isset($_COOKIE['fullname'])) {
    $_SESSION['fullname'] = $_COOKIE['fullname'];
    $_SESSION['userid'] = $_COOKIE['userid'];
}
require('Models/user.php');
$user = new User();
$value = $user->get_user_byid($_SESSION['userid']);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/minishop/admin/" class="brand-link">
                <h3 class="brand-text font-weight-bold">Mini Shop</h3>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../Public/uploads/users/<?php echo $value['image']; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['fullname']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="http://localhost/minishop/admin/" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="?p=list-category" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Categories
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?p=add-category" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?p=list-category" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Categories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Sub Categories
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?p=add-subcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Sub Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?p=list-subcategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Sub Categories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Products
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?p=add-product" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add new Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?p=list-product" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Products</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Orders
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!-- <li class="nav-item">
                                    <a href="?p=add-product" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add new Product</p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="?p=list-order" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Orders</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?p=add-user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create new User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="?p=list-user" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Users</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
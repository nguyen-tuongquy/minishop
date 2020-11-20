<?php
    ob_start();
    session_start();
    require('../Models/database.php');
    $db = new Database();
    $error = "";
    $pattern_username = '/^[a-zA-Z0-9\.\_]{5,}$/';
    // $pattern_password = "/^[a-z0-9\@\_\-\&]{8,}/";
    if (isset($_POST['login'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $rememberme = isset($_POST['rememberme']) ? 1 : 0;
            if (preg_match($pattern_username, $username)) {
                $sql = "SELECT * FROM users where username = :username";
                $param = [
                    "username" => $username
                ];
                $value = $db->db_get_row($sql,$param);
                if (!empty($value) && password_verify($password,$value['password'])) {
                    $_SESSION['userid'] = $value['id'];
                    $_SESSION['username'] = $username;
                    $_SESSION['fullname'] = $value['fullname'];
                    if ($rememberme == 1) {
                        $time = time() + 3600*24*30;
                        setcookie("userid",$value['id'],$time);
                        setcookie("active",$rememberme,$time);
                        setcookie("fullname",$value['fullname'],$time);
                        header('Location: http://localhost/minishop/admin/');
                    }
                    else {
                        header('Location: http://localhost/minishop/admin/');
                    }
                }
                else {
                    $error = "Username or password is not correct!";
                }
            }
            else {
                $error = "Username is not valid!";
            }
        }
        else {
            $error = "Username or password can not be blank!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Public/admin/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Mini Shop</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Enter your username">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="rememberme" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <div class="mb-2 color text-danger"><?php echo $error; ?></div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-lock" style="width: 100px;">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../Public/admin/sbadmin/jquery/jquery.min.js"></script>
    <script src="../Public/admin/sbadmin/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Public/admin/sbadmin/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Public/admin/sbadmin/js/sb-admin-2.min.js"></script>

</body>

</html>
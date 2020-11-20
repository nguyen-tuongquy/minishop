<?php 
    ob_start();
    include_once('Models/user.php');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = new User();
        $list = $user->get_user_byid($id);
    if (isset($_POST['updateUser'])) {
        if ($_FILES['image']['size'] > 0) {
            $error = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $part = explode('.',$_FILES['image']['name']);
            $file_ext = strtolower(end($part));
            $extensions = array("jpeg","png","jpg");
            if (in_array($file_ext,$extensions) === false) {
                $error[] = "Extensions is not allowed! Try JPEG/PNG/JPG.";
            }
            if ($file_size > 5242880) {
                $error[] = "File must be lower than 5MB.";
            }
            if (empty($error)) {
                move_uploaded_file($file_tmp,"../Public/uploads/users/".$file_name);
            }
            else {
                print_r($error);
            }
            $data = [
                "fullname" => $_POST['fullname'],
                "password" => password_hash($_POST['password'],PASSWORD_DEFAULT),
                "image" => $file_name,
                "type" => $_POST['usertype'],
                "id" => $id
            ];
            if ($user->update_user($data)) {
                header('Location:?p=list-user');
            }
        }
        else {
            $data = [
                "fullname" => $_POST['fullname'],
                "password" => password_hash($_POST['password'],PASSWORD_DEFAULT),
                "image" => "default.png",
                "type" => $_POST['usertype'],
                "id" => $id
            ];
            if ($user->update_user($data)) {
                header('Location:?p=list-user');
            }
        }

    }
}

?>
<style>
    #preview {
        margin-right: auto;
        margin-left: auto;
        display: block;
    }
    #image_preview {
        cursor: pointer;
    }
</style>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update User: <?php echo $list['username']; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Update User: <?php echo $list['username']; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">    
                        <div class="row">                          
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="card">
                                        <div class="card-header"><h4 class="card-title text-center">User's profile image</h4></div>
                                        <div class="card-body">                                         
                                            <div class="row">
                                                <div id="preview">
                                                    <img class="rounded mb-3" id="image_preview" src="../Public/uploads/users/<?php echo $list['image']; ?>" onclick="clickUpload();" style="width: 300px; height: 300px;" alt="default picture">
                                                </div>                                                
                                                <input type="file" id="uploadbutton" name="image" accept="image/*" onchange="showPreview(event);">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 offset-md-1">                                
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="fullname">Full name:</label>
                                                <input type="text" value="<?php echo $list['fullname'] ?>" name="fullname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input type="text" name="username" value="<?php echo $list['username']; ?>" id="" class="form-control" placeholder="" aria-describedby="helpId" required disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="repassword">Re-enter password:</label>
                                                <input type="password" name="repassword" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                            </div>
                                        </div>
                                    </div>          
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                              <label for="usertype">Select user's type (Default: Guest):</label>
                                              <select name="usertype" id="" class="form-control">
                                                  <?php switch ($list['type']) {
                                                      case 1: ?>
                                                        <option value="1">Administrator</option>
                                                        <option value="0">Guest</option>
                                                      <?php break;
                                                      case 0: ?>
                                                        <option value="0">Guest</option>
                                                        <option value="1">Administrator</option>
                                                      <?php break;
                                                  }
                                                  ?>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <button type="submit" name="updateUser" class="btn btn-primary">Update</button>
                                                <a href="?p=list-user" class="ml-5">
                                                    <span class="btn btn-primary">Go back</span>
                                                </a>
                                            </div>
                                    </div>
                        </div>
                <!-- /.card-body -->
                </form>
                </div>
            </div> 
        </div>
    </section>
</div>
<script>
    
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("image_preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
    function getSubcategory(cate_id) {
        $.ajax({
            type: 'get',
            url: 'Models/getsubcategory.php',
            dataType: 'text',
            data: 'cateid=' + cate_id,
            success: function(result) {
                $('#subcategory').html(result);
            }
        });
    }
    function clickUpload() {
        document.getElementById("uploadbutton").click();
    }
    $(document).ready(function () {
        $("#summernote").summernote({
            height: 135,
            minHeight: 100,
            maxHeight: 300
        });
    });
</script>

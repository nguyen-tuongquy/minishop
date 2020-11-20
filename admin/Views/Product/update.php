<?php 
    ob_start();
    include_once('Models/category.php');
    include_once('Models/subcategory.php');
    include_once('Models/product.php');
    $category = new category();
    $product = new Product();
    $subcategory = new Subcategory();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $value = $product->get_list_by_id($id);
    }
    $list_category = $category->get_list_all();
    if (isset($_POST['updateProduct'])) {
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
                move_uploaded_file($file_tmp,"../Public/uploads/".$file_name);
            }
            else {
                print_r($error);
            }
            $data = [
                "name" => $_POST['product-name'],
                "subcate_id" => $_POST['sub-category'],
                "in_stock" => $_POST['in-stock'],
                "price" => $_POST['price'],
                "image" => $file_name,
                "id" => $id
            ];
            if ($product->update_product($data)) {
                header('Location:?p=list-product');
            }
        }
        else {
            $data = [
                "name" => $_POST['product-name'],
                "subcate_id" => $_POST['sub-category'],
                "in_stock" => $_POST['in-stock'],
                "price" => $_POST['price'],
                "image" => $value['image'],
                "id" => $id
            ];
            if ($product->update_product($data)) {
                header('Location:?p=list-product');
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
                    <h1>Update Product: <?php echo $value['name']; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Update <?php echo $value['name']; ?></li>
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
                                        <div class="card-header"><h4 class="card-title">Product's image</h4></div>
                                        <div class="card-body">                                         
                                            <div class="row">
                                                <div id="preview">
                                                    <img class="rounded mb-3" onclick="clickUpload();" id="image_preview" src="../Public/uploads/<?php echo $value['image'] ?>" style="width: 300px; height: 300px;" alt="default picture">
                                                </div>                                                
                                                <input type="file" id="uploadbutton" name="image" accept="image/*" onchange="showPreview(event);">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">                                
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="product-name">Product name:</label>
                                                <input type="text" value="<?php echo $value['name']; ?>" name="product-name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                <small id="helpId" class="text-muted">Enter the new product's name</small>
                                            </div>
                                        </div>
                                    </div>          
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <?php $val_category = $category->db_get_list_by_id($value['cate_id']); ?>
                                              <label for="category">Select main category:</label>
                                              <select name="category" id="" class="form-control" onchange="getSubcategory(this.value);">
                                                  <option hidden value="<?php echo $value['id']; ?>"><?php echo $val_category['name']; ?></option>
                                                  <?php foreach ($list_category as $cate_value) { ?>
                                                    <option value="<?php echo $cate_value['id']; ?>"><?php echo $cate_value['name']; ?></option>
                                                  <?php } ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <?php $val_subcategory = $subcategory->db_get_list_by_id($value['subcate_id']); ?>
                                              <label for="sub-category">Select sub category:</label>
                                              <select name="sub-category" id="subcategory" class="form-control">
                                                  <option hidden value="<?php echo $val_subcategory['id']; ?>"><?php echo $val_subcategory['name']; ?></option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="in-stock">In stock:</label>
                                                <input type="text" value="<?php echo $value['in_stock']; ?>" name="in-stock" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                            <div class="form-group">
                                                <label for="price">Price (VND):</label>
                                                <input type="text" name="price" value="<?php echo $value['price']; ?>" id="" class="form-control" placeholder="">
                                        </div>
                                        </div>                                                              
                                    </div>
                                    <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <button type="submit" name="updateProduct" class="btn btn-primary">Update</button>
                                                <a href="?p=list-product" class="ml-5">
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
</script>
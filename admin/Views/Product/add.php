<?php 
    ob_start();
    include_once('Models/category.php');
    include_once('Models/subcategory.php');
    include_once('Models/product.php');
    $category = new category();
    $product = new Product();
    $subcategory = new Subcategory();
    $list_category = $category->get_list_all();
    if (isset($_POST['addProduct'])) {
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
                "image" => $file_name
            ];
            if ($product->add_product($data)) {
                header('Location:?p=list-product');
            }
        }
        else {
            $data = [
                "name" => $_POST['product-name'],
                "subcate_id" => $_POST['sub-category'],
                "in_stock" => $_POST['in-stock'],
                "price" => $_POST['price'],
                "image" => "default.png"
            ];
            echo "<pre>";
            var_dump($data);
            echo "</pre>";
            if ($product->add_product($data)) {
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
                    <h1>Add new Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add new Product</li>
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
                                                    <img class="rounded mb-3" id="image_preview" src="../Public/uploads/default.png" onclick="clickUpload();" style="width: 300px; height: 300px;" alt="default picture">
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
                                                <input type="text" name="product-name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                            </div>
                                        </div>
                                    </div>          
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                              <label for="category">Select main category:</label>
                                              <select name="category" id="" class="form-control" onchange="getSubcategory(this.value);">
                                                  <option hidden value="">Select a Main Category</option>
                                                  <?php foreach ($list_category as $value) { ?>
                                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                                  <?php } ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                              <label for="sub-category">Select sub category:</label>
                                              <select name="sub-category" id="subcategory" class="form-control">
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="in-stock">In stock:</label>
                                                <input type="text" name="in-stock" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="price">Price (VND):</label>
                                                <input type="number" name="price" step="1" min="1" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>                                                              
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <textarea name="description" id="summernote" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <button type="submit" name="addProduct" class="btn btn-primary">Add new</button>
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
    $(document).ready(function () {
        $("#summernote").summernote({
            height: 135,
            minHeight: 100,
            maxHeight: 300
        });
    });
</script>

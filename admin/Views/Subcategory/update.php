<?php
ob_start();
include_once('Models/subcategory.php');
include_once('Models/category.php');
$cate = new Category();
$sub = new Subcategory();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $list_cate = $cate->get_list_all();
    $list_sub = $sub->get_list_all_from_view_cate_subcate();
    $value = $sub->get_list_from_view_cate_subcate_byid($id);
    if (isset($_POST['updateSubcategory'])) {
        $data = [
            "name" => $_POST['subcategory-name'],
            "id" => $id,
            "cate_id" => $_POST['category']
        ];
        if ($sub->update_subcategory($data))
            header('Location:?p=update-subcategory&id=' . $value['id']);
    }
}
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Sub Category: <?php echo $value['name'] ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Update <?php echo $value['name'] ?></li>
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
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="subcategory-name">Sub Category name:</label>
                                                <input type="text" value="<?php echo $value['name']; ?>" name="subcategory-name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                <small id="helpId" class="text-muted">Enter Sub category's name</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                              <label for="category">Belong to Category:</label>
                                              <select name="category" id="" class="form-control">
                                                  <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_name']; ?></option>
                                                  <?php foreach ($list_cate as $select) { ?>
                                                    <option value="<?php echo $select['id']; ?>"><?php echo $select['name']; ?></option>
                                                  <?php } ?>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <button type="submit" name="updateSubcategory" class="btn btn-primary">Update</button>
                                            <a href="?p=list-subcategory" class="ml-5">
                                                <span class="btn btn-primary">Go back</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="text-align: center;" >No.</th>
                                            <th style="text-align: center;" >Name</th>
                                            <th style="text-align: center;" >Belong to</th>
                                            <th style="text-align: center;" >Created at</th>
                                        </tr>
                                    </thead> 
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <?php $stt = 1; foreach($list_sub as $row) { ?>
                                            <td><?php echo $stt; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['cate_name']; ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_created'])); ?></td>
                                        </tr>
                                        <?php $stt++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
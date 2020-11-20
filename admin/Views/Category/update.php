<?php
ob_start();
include_once('Models/category.php');
$cate = new Category();
if (isset($_GET['id'])); {
$id = $_GET['id'];
$value = $cate->db_get_list_by_id($id);
$list = $cate->get_list_all();
if (isset($_POST['updateCategory'])) {
    $data = [
        "name" => $_POST['category-name'],
        "id" => $id
    ];
    if ($cate->update_category($data)) 
        header('Location:?p=update-category&id=' . $value['id']);
}
}

?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Category: <?php echo $value['name']; ?></h1>
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
                                                <label for="category-name">Category name:</label>
                                                <input type="text" value="<?php echo $value['name']; ?>" name="category-name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                <small id="helpId" class="text-muted">Enter the new category's name</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <button type="submit" name="updateCategory" class="btn btn-primary">Update</button>
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
                                            <th style="text-align: center;" >Created at</th>
                                        </tr>
                                    </thead> 
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <?php $stt = 1; foreach($list as $row) { ?>
                                            <td><?php echo $stt; ?></td>
                                            <td><?php echo $row['name']; ?></td>
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
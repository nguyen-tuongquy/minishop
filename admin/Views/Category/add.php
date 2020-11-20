<?php
ob_start();
require('Models/category.php');
$cate = new Category();
$list = $cate->get_list_all();
if (isset($_POST['addCategory'])) {
    $name = $_POST['category-name'];
    var_dump($name);
    $data = [
        "name" => $name
    ];
    if ($cate->add_category($data))
        header('Location:?p=add-category');
}
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create new Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create new Category</li>
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
                                                <input type="text" name="category-name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                                                <small id="helpId" class="text-muted">Enter the new category's name</small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <button type="submit" name="addCategory" class="btn btn-primary">Create</button>
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
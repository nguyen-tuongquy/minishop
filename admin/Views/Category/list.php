<?php
ob_start();
include_once('Models/category.php');
$cate = new Category();
$list = $cate->get_list_all();
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?p=mng">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="?p=add-category" class="btn btn-primary">Add new</a>
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
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th style="text-align: center;" >Name</th>
                                            <th style="text-align: center;" >Created at</th>
                                            <th style="text-align: center;" >Update</th>
                                            <th style="text-align: center;" >Delete</th>
                                            
                                        </tr>
                                    </thead> 
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <?php $stt = 1; foreach($list as $row) { ?>
                                            <td><?php echo $stt; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_created'])); ?></td>
                                            <td style="text-align: center;">
                                                    <a href="?p=update-category&id=<?php echo $row['id']; ?>">
                                                        <span class="btn btn-primary"><i class="fas fa-edit "></i></span>
                                                    </a>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                    <a href="?p=list-category&id=<?php echo $row['id']; ?>" onclick="return confirmDelete();">
                                                        <span class="btn btn-danger"><i class="fas fa-trash "></i></span>
                                                    </a>
                                            </td>
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
<script type="text/javascript">
        function confirmDelete() {
            return confirm('Are you sure?');
        }
</script>
<?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $cate->delete_category($id);
        header('Location:?p=list-category');
        ob_flush();
    }
?>
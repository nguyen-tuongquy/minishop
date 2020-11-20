<?php
ob_start();
include_once('Models/user.php');
$user = new User();
$list = $user->get_list_all();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $value = $user->get_user_byid($id);
    if ($value['image'] != "default.png") 
        unlink("../Public/uploads/" . $value['image']);
    if ($user->delete_user($id))
        header('Location:?p=list-user');
}
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?p=home">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="?p=add-user" class="btn btn-primary">Add new user</a>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="user-table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;" >Full name</th>
                                            <th style="text-align: center;" >Username</th>
                                            <th style="text-align: center;" >Image</th>
                                            <th style="text-align: center;" >Type</th>
                                            <th style="text-align: center;" >Created at</th>
                                            <th style="text-align: center;" >Last update</th>
                                            <th style="text-align: center;" >Edit</th>
                                            <th style="text-align: center;" >Delete</th>
                                            
                                        </tr>
                                    </thead> 
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <?php $stt = 1; foreach($list as $row) { ?>
                                            <td><?php echo $stt; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><img class="img-thumbnail" style="width: 80px; height: 80px;" src="../Public/uploads/users/<?php echo $row['image']; ?>" alt="Product's image" sizes="50x50" srcset=""></td>
                                            <td><?php echo $type = ($row['type'] == 1) ? "Administrator" : "Guest"; ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_created'])); ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_updated'])); ?></td>
                                            <td style="text-align: center;">
                                                    <a href="?p=update-user&id=<?php echo $row['id']; ?>">
                                                        <span class="btn btn-primary"><i class="fas fa-edit "></i></span>
                                                    </a>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                    <a href="?p=list-user&id=<?php echo $row['id']; ?>" onclick="return confirmDelete();">
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
        var c = false;
        function confirmDelete() {
            return confirm('Are you sure?');
        }
</script>
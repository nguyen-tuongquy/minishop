<?php
ob_start();
include_once('Models/order.php');
$order = new Order();
$list = $order->get_list_all();
?>

</style>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
            <!-- <div class="row mb-2 mt-3">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="?p=add-subcategory" class="btn btn-primary">Add new</a>
                </div>
                
            </div> -->
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
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;" >Customer's name</th>
                                            <th style="text-align: center;" >Phone</th>
                                            <th style="text-align: center;" >Email</th>
                                            <th style="text-align: center;" >Status</th>
                                            <th style="text-align: center;" >Created at</th>
                                            <th style="text-align: center;" >Last updated</th>
                                            <th style="text-align: center;" >Total</th>
                                            <th style="text-align: center;" >View & Confirm</th>
                                            
                                            
                                        </tr>
                                    </thead> 
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <?php foreach($list as $row) { ?>
                                            <td><?php echo "Order #" . $row['id']; ?></td>
                                            <td><?php echo $row['customer_name']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php switch ($row['status']) {
                                                case 0: ?>
                                                    <span class="btn btn-warning btn-icon-split">
                                                        <span class="icon text-white-50"><i class="fas fa-question-circle mt-1"></i></span>
                                                        <span class="text">Pending</span>
                                                </span> <?php break;
                                                case 1: ?>
                                                    <span class="btn btn-info btn-icon-split">
                                                        <span class="icon text-white-50"><i class="fas fa-calendar-check mt-1"></i></span>
                                                        <span class="text">Invoiced</span>
                                                </span> <?php break;
                                                case 2: ?>
                                                    <span class="btn btn-primary btn-icon-split">
                                                        <span class="icon text-white-50"><i class="fas fa-shipping-fast mt-1"></i></span>
                                                        <span class="text">Shipping</span>
                                                </span> <?php break;
                                                case 3: ?>
                                                    <span class="btn btn-success btn-icon-split">
                                                        <span class="icon text-white-50"><i class="fas fa-check-circle mt-1"></i></span>
                                                        <span class="text">Finished</span>
                                                </span> <?php break;
                                                case 4: ?>
                                                    <span class="btn btn-danger btn-icon-split">
                                                        <span class="icon text-white-50"><i class="fas fa-times-circle mt-1"></i></span>
                                                        <span class="text">Cancelled</span>
                                                </span> <?php break;
                                            } ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_created'])); ?></td>
                                            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_updated'])); ?></td>
                                            <td><?php echo number_format($row['total']) ?> VND</td>
                                            <td style="text-align: center;">
                                                    <a href="?p=update-order&id=<?php echo $row['id']; ?>">
                                                        <span class="btn btn-primary"><i class="fas fa-clipboard-check"></i></span>
                                                    </a>
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
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
<!-- <script type="text/javascript">
        function confirmDelete() {
            return confirm('Are you sure?');
        }
</script> -->

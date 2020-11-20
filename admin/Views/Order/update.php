<?php 
    require('Models/order.php');
    $order = new Order();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $value = $order->get_order_byid($id);
        $detail = $order->get_order_detail($id);
        if (isset ($_POST['updateOrder'])) {
            $data = [
                "phone" => $_POST['phone'],
                "email" => $_POST['email'],
                "address" => $_POST['address'],
                "status" => $_POST['status'],
                "id" => $id
            ];
            if ($order->update_orders($data)) {
                header('Location:?p=list-order');
            }
        }
    }
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Order: <?php echo "#" . $value['id'] ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Update <?php echo "Order #" . $value['id'] ?></li>
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
                <form method="post" action="">
                    <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h4>CUSTOMER AND PAYMENT INFO</h4> 
                                    <div class="row">
                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 form-group">
                                            <label>Created at:</label>
                                            <input value="<?php echo date("m/d/Y - H:i:s",strtotime($value['date_created'])); ?>" class="form-control" type="text" name="" id="" readonly>
                                        </div>
                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 form-group">
                                            <label>Last updated:</label>
                                            <input value="<?php echo date("m/d/Y - H:i:s",strtotime($value['date_updated'])); ?>" class="form-control" type="text" name="" id="" readonly>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-group">
                                            <label>Customer:</label>
                                            <input value="<?php echo $value['customer_name'] ?>" class="form-control" type="text" name="txtname" id="" readonly>
                                        </div> 
                                    </div>
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 form-group">
                                        <label>Phone:</label>
                                        <input name="phone" value="<?php echo $value['phone'] ?>" class="form-control" type="text" name="txtname" id="" >
                                    </div>
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 form-group">
                                        <label>Email:</label>
                                        <input name="email" value="<?php echo $value['email'] ?>" class="form-control" type="text" name="txtname" id="" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 form-group">
                                        <label>Address:</label>
                                        <input name="address" value="<?php echo $value['address'] ?>" class="form-control" type="text" name="txtname" id="" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 form-group">
                                        <label>Order status:</label>
                                        <input value="<?php switch ($value['status']) {
                                            case 0:
                                                echo "Pending";
                                                break;
                                            case 1:
                                                echo "Invoiced";
                                                break;
                                            case 2:
                                                echo "Shipping";
                                                break;
                                            case 3:
                                                echo "Finished";
                                                break;
                                            case 4:
                                                echo "Cancelled";
                                                break;
                                        } ?>" class="form-control font-weight-bold text-white <?php switch ($value['status']) {
                                            case 0:
                                                echo "bg-warning";
                                                break;
                                            case 1:
                                                echo "bg-info";
                                                break;
                                            case 2:
                                                echo "bg-primary";
                                                break;
                                            case 3:
                                                echo "bg-success";
                                                break;
                                            case 4:
                                                echo "bg-danger";
                                                break;
                                        } ?>" type="text" name="" id="" readonly>
                                    </div>
                                    
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    </div>
                                    
                                </div>             
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 offset-2">
                                <h4>ORDER INFO</h4>
                                <div class="card">
                                  <div class="card-header font-weight-bolder text-primary">
                                    Order <?php echo " #" . $value['id']; ?>
                                  </div>
                                  <div class="card-body">
                                    <h3 class="card-title">Total: </h3>
                                    <h2 class="card-text font-weight-bolder text-primary"><?php echo number_format($value['total']) ?> VND</h2>
                                    <h5 class="card-title">Update this order's status: </h5>
                                    <select class="form-control" name="status" id="">
                                        <option value="<?php echo $value['status']; ?>"><?php switch ($value['status']) {
                                            case 0:
                                                echo "Pending";
                                                break;
                                            case 1:
                                                echo "Invoiced";
                                                break;
                                            case 2:
                                                echo "Shipping";
                                                break;
                                            case 3:
                                                echo "Finished";
                                                break;
                                            case 4:
                                                echo "Cancelled";
                                                break;
                                        } ?></option>
                                        <option value="1">Invoiced</option>
                                        <option value="2">Shipping</option>
                                        <option value="3">Finished</option>
                                        <option value="4">Cancelled</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                    </div>
                    <div class="row mt-5 mb-3">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 offset-4">
                                <div class="btn-wrapper">
                                <button type="submit" name="updateOrder" class="btn btn-primary">Update</button>
                                    <a class="btn btn-info ml-5" href="?p=list-order">Go back</a>
                                </div>  
                            </div>
                        </div>
                </form>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2>PRODUCTS</h2>
                            <table class="table table-bordered">
                              <thead class="bg-info text-white text-center">
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                  <?php $stt = 1; foreach ($detail as $row) { ?>
                                <tr>
                                    <td><?php echo $stt; ?></td>
                                    <td><img src="../Public/uploads/<?php echo $row['image'] ?>" alt="Product's image" style="width: 120px; height: 120px;"></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo number_format($row['price']); ?> VND</td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td class="text-bold"><?php echo number_format($row['total']) ; ?> VND</td>
                                </tr>
                                  <?php $stt++; } ?>
                              </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.card-body -->
                </form>
            </div>
        </div>
    </section>
</div>
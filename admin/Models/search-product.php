<!-- <link rel="stylesheet" href="../../../Public/admin/dist/css/adminlte.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<?php
    ob_start();
    include_once('../../Models/database.php');
    include_once('product.php');
    $product = new Product();
    if (isset($_GET['keyword'])) {
        if (isset($_GET['sorttype'])) {
            $keyword = $_GET['keyword'];
            $type = $_GET['sorttype'];
            switch ($type) {
            case 'newest':
                $sql = "SELECT * FROM view_products WHERE name LIKE '%" . $keyword . "%' ORDER BY date_created DESC";
                $list = $product->db_get_list($sql);
            break;
            case 'desc':
                $sql = "SELECT * FROM view_products WHERE name LIKE '%" . $keyword . "%' ORDER BY price DESC";
                $list = $product->db_get_list($sql);
            break;
            case 'asc':
                $sql = "SELECT * FROM view_products WHERE name LIKE '%" . $keyword . "%' ORDER BY price ASC";
                $list = $product->db_get_list($sql);
            break;
            default:
                $sql = "SELECT * FROM view_products WHERE name LIKE '%" . $keyword . "%' ORDER BY name ASC";
                $list = $product->db_get_list($sql);
            break;
            }
        }
        else {
        $sql = "SELECT * FROM view_products WHERE name LIKE '%" . $keyword . "%'";
        $list = $product->db_get_list($sql);
        }
    }
    if (!empty($list)) {
?>
<table id="product-table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
    <thead>
        <tr role="row">
            <th style="text-align: center;">No.</th>
            <th style="text-align: center;" >Name</th>
            <th style="text-align: center;" >Sub Category</th>
            <th style="text-align: center;" >Image</th>
            <th style="text-align: center;" >In Stock</th>
            <th style="text-align: center;" >Price</th>
            <th style="text-align: center;" >Created at</th>
            <th style="text-align: center;" >Edit</th>
            <th style="text-align: center;" >Delete</th>
            
        </tr>
    </thead> 
    <tbody style="text-align: center;">
        <tr>
            <?php $stt = 1; foreach($list as $row) { ?>
            <td><?php echo $stt; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['subcate_name']; ?></td>
            <td><img class="img-thumbnail" style="width: 120px; height: 120px;" src="../Public/uploads/<?php echo $row['image']; ?>" alt="Product's image" sizes="50x50" srcset=""></td>
            <td><?php echo $row['in_stock']; ?></td>
            <td><?php echo number_format($row['price']); ?> VND</td>
            <td><?php echo date("m/d/Y - H:i:s",strtotime($row['date_created'])); ?></td>
            <td style="text-align: center;">
                    <a href="?p=update-product&id=<?php echo $row['id']; ?>">
                        <span class="btn btn-primary"><i class="fas fa-edit "></i></span>
                    </a>
                
            </td>
            <td style="text-align: center;">
                    <a href="?p=list-product&id=<?php echo $row['id']; ?>" onclick="return confirmDelete();">
                        <span class="btn btn-danger"><i class="fas fa-trash "></i></span>
                    </a>
            </td>
        </tr>
        <?php $stt++; } ?>
    </tbody>
</table>
<?php } else  echo "<h3 class=text-center style= opacity:0.4>No data found! Try another keyword</h3>"; ?>
<!-- <script src="../../../Public/admin/dist/js/adminlte.js"></script>
<script src="../../../Public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

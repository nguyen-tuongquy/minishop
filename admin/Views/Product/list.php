<?php
ob_start();
include_once('Models/product.php');
$product = new Product();
$list = $product->get_list_all();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $value = $product->get_list_by_id($id);
    if ($value['image'] != "default.png") 
        unlink("../Public/uploads/" . $value['image']);
    if ($product->delete_product($id))
        header('Location:?p=list-product');
}
?>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?p=home">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="?p=add-product" class="btn btn-primary">Add new</a>
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
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" name="sort" id="sort-select" onchange="sort(this.value);">
                                        <option hidden value="">Click to sort</option>
                                        <option value="newest">Newest Products</option>
                                        <option value="desc">Price Descending  </option>
                                        <option value="asc">Price Ascending  </option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                  <input type="text"
                                    class="form-control" name="key" id="keyword" placeholder="Search something...">
                                </div>
                            </div>
                            
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <button type="button" class="btn btn-primary" id="search-btn" onclick="searchProduct();"><i class="fas fa-search"></i></button>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
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
        function sort(type) {
            console.log(type,c);
            if (c == true) {
                var keyword = document.getElementById("keyword").value;
                $.ajax ({
                    type: 'get',
                    url: 'Models/sort-product.php',
                    dataType: 'text',
                    data: {sorttype: type, keyword: keyword, c: c},
                    success: function(result) {
                        $('#product-table').html(result);
                        document.getElementById("keyword").value = "";
                        c = false;
                    }
                });
            }
            else {
                $.ajax ({
                    type: 'get',
                    url: 'Models/sort-product.php',
                    dataType: 'text',
                    data: {sorttype: type},
                    success: function(result) {
                        $('#product-table').html(result);
                    }
            });
            }
        }
        var input = document.getElementById("keyword");
        input.addEventListener("keyup", function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                document.getElementById("search-btn").click();
                c = true;
            }
        })
        function searchProduct() {
            var keyword = document.getElementById("keyword").value;
            var type = document.getElementById("sort-select").value;
            console.log(keyword,type);
            $.ajax ({
                type: 'get',
                url: 'Models/search-product.php',
                dataType: 'text',
                data: {keyword: keyword, sorttype: type},
                success: function(result) {
                    $('#product-table').html(result);
                }
            });
        }
        
</script>
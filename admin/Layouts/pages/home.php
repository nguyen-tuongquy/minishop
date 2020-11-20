<?php
	$db = new Database();
	$status = array();
	//get products instock
	$sql = "SELECT COUNT(*) FROM products";
	$list = $db->db_get_row($sql);
	$status['product_count'] = $list['0'];
	$sql = "SELECT COUNT(*) FROM subcategories";
	$list = $db->db_get_row($sql);
	$status['sub_count'] = $list[0];
	$sql = "SELECT COUNT(*) FROM categories";
	$list = $db->db_get_row($sql);
	$status['cate_count'] = $list[0];
	$sql = "SELECT COUNT(*) FROM users";
	$list = $db->db_get_row($sql);
	$status['user_count'] = $list[0];
?>
<div class="content-wrapper" style="min-height: 365px;">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Trang chủ</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $status['product_count']; ?></h3>

							<h4>Products</h4>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="?p=list-product" class="small-box-footer">View detail <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $status['sub_count']; ?><sup style="font-size: 20px"></sup></h3>

							<h4>Categories</h4>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="?p=list-subcategory" class="small-box-footer">View detail <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo $status['user_count']; ?></h3>

							<h4 style="color: #fff">Users</h4>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="?p=list-user" class="small-box-footer">View detail <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>---</h3>

							<h4>---</h4>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">View detail <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		</div>
	</section>
</div>
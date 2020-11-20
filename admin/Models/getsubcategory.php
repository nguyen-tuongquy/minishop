<link rel="stylesheet" href="../../../Public/admin/dist/css/adminlte.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<?php
ob_start();
include_once('../../Models/database.php');
include_once('subcategory.php');
$sub = new Subcategory();
if (isset($_GET['cateid'])) {
    $id = $_GET['cateid'];
    $list = $sub->get_list_by_cateid($id);
}
?>
<option hidden value="">Select the subcategory</option>
<?php foreach($list as $row) { ?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
<?php } ?>
<script src="../../../Public/admin/dist/js/adminlte.js"></script>
<script src="../../../Public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

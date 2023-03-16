<?php
include("../connectdb.php");
$sql = "select * from products where j_id='{$_GET['id']}'";
$rs = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($rs);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มแก้ไขข้อมูลสินค้า</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
</head>

<body>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>ฟอร์มแก้ไขข้อมูลสินค้า</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="j_id" name="j_id" type="text" placeholder="รหัสสินค้า" class="form-control input-md" required value="<?=$data['j_id'];?>" readonly>
  </div>
</div>
    

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="j_name" name="j_name" type="text" placeholder="ชื่อสินค้า" class="form-control input-md" required value="<?=$data['j_name'];?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_detail">รายละเอียด</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="j_detail" name="j_detail"><?=$data['j_detail'];?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_price">ราคา</label>  
  <div class="col-md-4">
  <input id="j_price" name="j_price" type="text" placeholder="ราคา" class="form-control input-md" required value="<?=$data['j_price'];?>">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">รูป</label>
  <div class="col-md-4">
    <input id="images" name="images" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-danger">แก้ไขข้อมูล</button>
  </div>
</div>

</fieldset>
</form>

<?php
	if (isset($_POST['Submit'])){
		include("../connectdb.php");
		$sql = "UPDATE `products` SET 
		`j_name` = '{$_POST['j_name']}', 
		`j_detail` = '{$_POST['j_detail']}', 
		`j_price` = '{$_POST['j_price']}' 
		WHERE `products`.`j_id` ='{$_GET['id']}';";
		mysqli_query($conn, $sql) or die ("แก้ไขข้อมูลไม่ได้");
	if(isset($_FILES['images']['name'])){
		@copy($_FILES['images']['tmp_name'],"images/".$_POST['j_id'].".jpg");
	
	}
		echo "<script>";
		echo "alert('แก้ไขข้อมูลสำเร็จแล้ว');";
		echo "window.location='delete.php';";
		echo "</script>";
    }

?>
</body>
</html>

		


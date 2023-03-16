<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มเพิ่มเครื่องประดับ</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 

</head>

<body>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
<fieldset>

<!-- Form Name -->
<legend>ฟอร์มเพิ่มเครื่องประดับ</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="j_id" name="j_id" type="text" placeholder="รหัสสินค้า" class="form-control input-md" required autofocus >
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="j_name" name="j_name" type="text" placeholder="ชื่อสินค้า" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_detail">รายละเอียด</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="j_detail" name="j_detail">รายละเอียด</textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="j_price">ราคา</label>  
  <div class="col-md-4">
  <input id="j_price" name="j_price" type="text" placeholder="ราคา" class="form-control input-md" required>
    
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="img">รูปเครื่องประดับ</label>
  <div class="col-md-4">
    <input id="images" name="images" class="input-file" type="file">
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">บันทึกข้อมูล</button>
  </div>
</div>

</fieldset>
</form>

<?php
	if (isset($_POST['Submit'])){
		include("../connectdb.php");
		$sql = "INSERT INTO `products`(`j_id`, `j_name`, `j_detail`, `j_price`)
		 VALUES 
		 ('{$_POST['j_id']}', 
		 '{$_POST['j_name']}', 
		 '{$_POST['j_detail']}', 
		 '{$_POST['j_price']}')";
		mysqli_query($conn, $sql) or die (mysqli_error($conn));
		
		
	@copy($_FILES['images']['tmp_name'], "../images/".$_POST['j_id'].".jpg");
		
	echo "<script>";
	echo "alert('บันทึกข้อมูลสำเร็จ')";
	echo "</script>";
	
	}
?>
<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="delete.php" class="btn btn-primary">กลับ</a>
    </p>

</footer>



</body>
</html>
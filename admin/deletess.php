
<meta charset="utf-8">
<?php
if (isset($_GET['id'])){
	include("../connectdb.php");
	$sql = "delete from products where j_id='{$_GET['id']}'" ;
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	unlink("images/".$_GET['id'].".jpg");
	
	echo "<script>";
	echo "window.location='delete.php';" ;
	echo "</script>";
	
}
?>
   
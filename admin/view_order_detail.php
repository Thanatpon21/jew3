
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Jewelry</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader"></div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="../admin/homeadmin.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16">
  <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg>
<strong>หน้าหลัก</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </div>
</header>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    
<title>รายละเอียดใบสั่งซื้อ</title>
</head>

<body>

<h1>รายละเอียดใบสั่งซื้อ เลขที่ <?=$_GET['b'];?></h1>
<table width="863" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <th width="60">ลำดับ</th>
    <th width="318">สินค้า</th>
    <th width="141">จำนวน</th>
    <th width="149">ราคา/ชิ้น</th>
    <th width="173">รวม (บาท)</th>
   
     
          </tr>
 
		  <?php
            include("../connectdb.php");
            $sql = "SELECT  *  FROM  orders_detail
        INNER JOIN products ON orders_detail.jid = products.j_id
        WHERE orders_detail.oid = '".$_GET['b']."' ";
            $rs = mysqli_query($conn, $sql) ;
                  $i = 0;
                  while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH) ) {
                    $i++;
                    $sum = $data['j_price'] * $data['item'] ;
                    @$total += $sum;
         
             ?>
          <tr>
            <th><?=$i;?></th>
            <th><img src="../admin/images/<?=$data['j_id'];?>.jpg" class="templatemo-item" width=50%> <br>
            รหัสสินค้า: <?=@$data['j_id'];?> <br>
            ชื่อสินค้า: <?=$data['j_name'];?></th>
            <th><?=$data['item'];?></th>
            <th><?=number_format($data['j_price'],0);?></th>
            <th><?=number_format($sum,0);?></th>
            
          </tr>
         <?php } ?>

          
         



        



          
          <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>รวมทั้งสิ้น</th>
            <th><?=number_format($total,0);?></th>
          </tr>
      </table>
	</div>
</div>
<br>

		<a href="view_order.php" class="btn btn-dark">กลับไปหน้ารายการใบสั่งซื้อ</a>
                          </div>		


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>




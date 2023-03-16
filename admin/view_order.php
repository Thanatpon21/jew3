
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
      <a href="homeadmin.php" class="navbar-brand d-flex align-items-center">
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


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
	  <div class="text" >
		<a href="../blog/allproduct.php" type="submit" class="btn btn-light">กลับไปเลือกสินค้า</a> </div><br>
	  <div class="gaming-library profile-library">
	  <div class="col-lg-20">
		  <div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart-table-wrap" >
						<table class="cart-table" width="100%" height="80%">
							<thead class="cart-table-head" >
								<tr class="table-head-row" >
									<th class="product-image">&nbsp;</th>
									<th class="product-name">เลขที่ใบสั่งซื้อ</th>
									<th class="product-price">วันที่</th>
									<th class="product-quantity">ราคารวม</th>
                                    <th class="customer-add">ลูกค้า</th>
                                    
                                    	
								</tr>
								 <?php
									include("../connectdb.php");
									$sql = "SELECT * FROM `order` ORDER BY o_id ASC ";
									$rs = mysqli_query($conn, $sql) ;
									while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                                 ?>

                                      <tr>
                                    <th><a href="../admin/view_order_detail.php?b=<?=$data['o_id'];?>" class="btn btn-light">ดูรายละเอียด</a></th>
                                    <th><?=$data['o_id'];?></th>
                                    <th><?=$data['odate'];?></th>
                                    <th><?=number_format($data['ototal'],0);?></th>
                                    
                                      </tr>
                                      
                                      <?php  }  ?>
							</thead>
						</table>
					</div>
				</div>

				


	<!--====== Javascripts & Jquery ======-->
	<script src="../blog/js/jquery-3.2.1.min.js"></script>
	<script src="../blog/js/bootstrap.min.js"></script>
	<script src="../blog/js/owl.carousel.min.js"></script>
	<script src="../blog/js/mixitup.min.js"></script>
	<script src="../blog/js/sly.min.js"></script>
	<script src="../blog/js/jquery.nicescroll.min.js"></script>
	<script src="../blog/js/main.js"></script>
</body>
</html>
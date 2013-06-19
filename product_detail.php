<?php
	$file = $_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']);
	$root = dirname(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KOSHER GOURMET PLASTICS, TORONTO CANADA</title>
<?php $page = 'products'; ?>
<link href="<?php echo 'http://'.$file?>/includes/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo 'http://'.$file?>/includes/reset.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo 'http://'.$file?>/includes/kosher.js"></script>
</head>
<body>
<div class="sitewrap">
  <div id="top">
  	<a href="index.php"><div class="logo">
  	</div></a>
    <div class="help">
    NEED HELP? CALL US TODAY!<br/>
    <span class="green">416.781.9900</span>
    </div>
    <div class="nav">
    <?php include_once($root.'/includes/navigation.php')?>
    </div>
  </div>
  <div id="center">
  	<div id="products">
    	<div id="leftrow">
        	<div id="breadcrumbs" style="color:#FFF;">
			<a href="index.php">HOME</a>  &gt;  <a href="#">PRODUCTS</a>  &gt;  <a href="#">CUPS</a>  &gt;  <a href="#">PRODUCT NAME</a>
			</div>
        	<div class="browse">
        	BROWSE BY CATEGORY
        	</div>
        	<div class="leftnav">
        	<a href="product.php">Dishes</a><br/>
        	<a href="product.php">Squares</a><br/>
        	<a href="product.php">Cups</a><br/>
        	<a href="product.php">Cutlery</a><br/>
        	<a href="product.php">Minis</a><br/>
        	<a href="product.php">Serving</a><br/>
        	<a href="product.php">Napkins</a><br/>
        	</div>
        </div>
        <div id="right">
        	<div class="title">
            Cups
            </div>
          <div id="product_detail">
            	<div class="pic"><img src="images/cup_1_big.jpg" width="340" height="342" /></div>
                <div class="productname">Product<br/>Name</div>
                <div class="brand"><span class="brandsku">BRAND<br/>SKU #000</span></div>
                <div class="color"><span class="litgreen">AVAILABLE COLORS:</span><br/>
                <span class="black">Black, White</span><br/><br/>
                <span class="litgreen">UNITS/PK:</span><br/>
                <span class="black">20pcs</span></div>
                <div class="return"><span class="desc">RETURN TO<br/>CUPS CATEGORY</span>
                </div>
          </div>
        </div>
    </div>
  </div>
  <div id="footer">
  <?php include_once($root.'/includes/footer.php')?>
  </div>
</div>
</body>
</html>

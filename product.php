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
			<a href="index.php">HOME</a>  &gt;  <a href="#">PRODUCTS</a>  &gt;  <a href="#">CUPS</a>
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
            <div id="list">
            	<div class="product">
                <img src="images/cups_1.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="product">
                <img src="images/cups_2.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="productlast">
                <img src="images/cups_3.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="product">
                <img src="images/cups_4.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="product">
                <img src="images/cups_5.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="productlast">
                <img src="images/cups_6.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="product">
                <img src="images/cups_7.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div><div class="product">
                <img src="images/cups_8.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
                </div>
                <div class="productlast">
                <img src="images/cups_9.jpg" width="189" height="190" />
                	<div class="text">
                	<span class="name">Product Name</span><br/>
                	<span class="desc">BASIC DESCRIPTION</span>
                	</div>
                    <a href="product_detail.php"><div class="more">MORE<br/>INFO
                    </div></a>
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

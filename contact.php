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
			<a href="index.php">HOME</a>  &gt;  <a href="#">CONTACT US</a>
			</div><br/>
        	<div class="browse">
        	GET IN TOUCH!
        	</div>
        	<div class="address">
        	3003 Bathurst Street<br/>
            Toronto, ON M6B 3B2<br/><br/>
            416.781.9900
        	</div>
        </div>
        <div id="right" style="padding-top:70px;">
        <span class="gold">Have a question regarding a product you see on our site?<br/>
        &nbsp;&nbsp;&nbsp;Want to learn more about the products we offer?<br/>
        Would you like to place an order?
        </span><br/><br/>
        <span class="white">Contact us today by phone or email form below. We look forward to assisting you with your catering and disposable table setting needs.</span><br/><br/><br/>
         <div id="form">
        <form method="post" action="mailer.php" enctype="multipart/form-data">
          <div class="formline">
            <div class="label">COMPANY</div>
            <input type="text" name="FirstName" class="textfield"/>
          </div>
           <div class="formline">
            <div class="label">NAME</div>
            <input type="text" name="LastName" class="textfield"/>
          </div>
          <div class="formline">
            <div class="label">EMAIL</div>
            <input type="text" name="ComapanyName" class="textfield"/>
          </div>
          <div class="formline">
            <div class="label">INQUIRY</div>
            <textarea name="Comments" class="textarea"></textarea>
          </div>
          <div class="submit"> 
            <input type="Submit" value="CONTACT US" class="text_button"/>
          </div>
        </form>
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

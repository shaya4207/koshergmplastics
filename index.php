<?php
	$file = $_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']);
	$root = dirname(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KOSHER GOURMET PLASTICS, TORONTO CANADA</title>
<?php $page = 'index'; ?>
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
  	<div class="row1">
    	<div class="minispic">
    	</div>
        <div class="dishespic">
        </div>
        <div class="servingpic">
        </div>
    </div>
    <div class="row2">
    	<div class="mid">
    	</div>
        <div class="dessertpic">
        </div>
    </div>
    <div class="row3">
    	<div class="cupspic">
        </div>
        <div class="cutlerypic">
        </div>
    </div>
  </div>
  <div id="footer">
  <?php include_once($root.'/includes/footer.php')?>
  </div>
</div>
</body>
</html>

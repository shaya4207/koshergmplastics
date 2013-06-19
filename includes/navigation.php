<ul id="sddm">
	   <?php if($page=='about'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/about.php">ABOUT US</a>
      </li>
	  <?php if($page=='products'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/product.php" onMouseOver="mopen('m1')" onMouseOut="mclosetime()">PRODUCTS</a>
		  <div id="m1" onMouseOver="mcancelclosetime()" onMouseOut="mclosetime()">
		  <a href="../dishes.php">Dishes</a>
		  <a href="../dessert.php">Dessert</a>
		  <a href="../cups.php">Cups</a>
		  <a href="../cutlery.php">Cutlery</a>
          <a href="../minis.php">Minis</a>
          <a href="../serving.php">Serving</a>
          <a href="../napkins.php">Napkins</a>
		  </div>
	  </li>
	  <?php if($page=='contact'){?><li class="lion"><?php } else { ?><li><?php } ?><a href="http://<?php echo $file?>/contact.php">CONTACT US</a>
    </li>
  </ul>
<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<?php
$CONFIG = db_quote($_POST['CONFIG']);

/* Get the config file and replace the variables */
$result = db_query("SELECT * FROM `template` WHERE `name` LIKE $CONFIG");
  while($row = mysqli_fetch_assoc($result)){
  $source = $row['config'];
  	$text = strtr($source, $_POST);
}
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
	<div class="col-md-12">
	    <div class="well">
	    <button onclick="copyToClipboard('#config')" class="btn btn-block btn-success">Copy Config</button>
	    <p id="config"><?php echo nl2br ("$text");?></p>
	    </div>
	</div>
    </div>
</div>
<!-- Page Content end here -->
</body>
</html>

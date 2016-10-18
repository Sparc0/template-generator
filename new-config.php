<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<?php
$name = db_quote($_POST['name']);
$type = db_quote($_POST['type']);
$config = db_quote($_POST['config']);

$result = db_query("INSERT INTO `template` (`name`,`type`,`config`) VALUES (" . $name . "," . $type . "," . $config . ")");
if($result === false) {
    $error = db_error();
    // Handle failure - log the error, notify administrator, etc.
} else {
    // We successfully inserted a row into the database
    echo "Config successfully uploaded.";
}

?>
<!-- Page Content end here -->
</body>
</html>

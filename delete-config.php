<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<?php
$result = db_query("DELETE FROM `template` WHERE id={$_POST['id']} LIMIT 1");
if($result === false) {
    $error = db_error();
    // Handle failure - log the error, notify administrator, etc.
} else {
    // We successfully inserted a row into the database
    echo "Config successfully deleted.";
}
?>
<!-- Page Content end here -->
</body>
</html>

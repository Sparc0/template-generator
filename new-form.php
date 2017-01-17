<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<?php
$name = db_quote($_POST['name']);
$form = db_quote($_POST['form']);

$result = db_query("INSERT INTO `forms` (`form-name`,`form`) VALUES (" . $name . "," . $form . ")");
if($result === false) {
    $error = db_error();
    // Handle failure - log the error, notify administrator, etc.
} else {
    // We successfully inserted a row into the database
    echo "Form successfully uploaded.";
}

?>
<!-- Page Content end here -->
</body>
</html>

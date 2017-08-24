<?php

include_once('lib/head.php');
include_once('lib/include.php');
?>
<body>
<?php include_once('lib/navbar.php');?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="well">

<form class="form-horizontal" action="newform.php" method="GET">
<fieldset)>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Name">Name</label>  
  <div class="col-md-10">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="form">Form</label>
  <div class="col-md-10">                     
    <textarea class="form-control" id="form" name="form" rows="20"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-10">
    <button id="submit" name="submit" class="btn btn-success">Create</button>
  </div>
</div>

</fieldset>
</form>
      </div>
    </div>
  </div>
</div>
<?php
	if(isset($_GET['submit'])) {
	    newForm();
	}

function newForm() {
$name = db_quote($_GET['name']);
$form = db_quote($_GET['form']);

/* Remove whitespaces */
$formshort = str_replace(' ', '', $name);


$result = db_query("INSERT INTO `forms` (`form-name`,`form`,`formshort`) VALUES (" . $name . "," . $form . "," . $formshort . ")");
if($result === false) {
    $error = db_error();
    // Handle failure - log the error, notify administrator, etc.
} else {
    // We successfully inserted a row into the database
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=listforms.php\">";
}
}
?>


<!-- Page Content end here -->
</body>
</html>

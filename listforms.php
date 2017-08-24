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
	<table class="table table-striped">
  	  <tr>
	   <th>Name</th>
	   <th>Last changed</th>
	   <th></th>
	   <th></th>
	  </tr>
	<?php
	$result = db_query("SELECT * FROM `forms` ORDER BY id ASC");
	while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" .$row['form-name']."</td>";
	echo "<td>" .$row['date']."</td>";
	echo "<td><form action='listforms.php' method='GET'><input type='hidden' name='id' value='".$row["id"]."'/><input type='submit' onClick=\"return confirm('Are you sure?');\" name='Delete' class='btn btn-danger' value='Delete' /></form></td>";
	echo "<td><form action='editform.php' method='GET'><input type='hidden' name='id' value='".$row["id"]."'/><input type='submit' name='submit-btn' class='btn btn-info' value='Edit' /></form></td>";
	echo "</tr>";
	}
	?>
	</table>
	<input type="submit" name="Add" class="btn btn-success" value="Add new form" onclick="window.location='newform.php';"/>
      </div>
    </div>
  </div>
</div>
<?php
    if(isset($_GET['Delete'])) {
        delForm();
    }

function delForm() {
$var = db_quote($_GET['id']);

$result = db_query("DELETE FROM `forms` WHERE id={$_GET['id']} LIMIT 1");
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

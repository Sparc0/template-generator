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
	<form class="form-horizontal" name="var" id="var" action="variables.php" method="GET">
	<table class="table table-striped">
  	  <thead>
	   <th>Variable</th>
	   <th>Description</th>
	   <th></th>
	   <th></th>
	  </thead>
	  <tbody>
		<?php
		$result = db_query("SELECT * FROM `vars`");
		while ($row = $result->fetch_assoc()) {
		echo "</tr>";
		echo "<td>" .$row['var']."</td>";
		echo "<td>" .$row['description']."</td>";
		echo "<td><form action='variables.php' method='GET'><input type='hidden' name='id' value='".$row["var"]."'/><input type='submit' onClick=\"return confirm('Are you sure?');\" name='Delete' class='btn btn-danger' value='Delete' /></form></td>";
		echo "</tr>";
		}
		?>
		<tr>
		  <td><input type="text" class="form-control" id="variable" name="variable" placeholder="Variable"/></td>
		  <td><input type="text" class="form-control" id="description" name="description" placeholder="Description"/></td>
		  <td><input type="submit" name="Add" class="btn btn-success" value="Add"/></td>
		<tr>
	</table>
      </div>
    </div>
  </div>
</div>
<?php
    if(isset($_GET['Add'])) {
	addVar();
    }
    if(isset($_GET['Delete'])) {
        delVar();
    }

function addVar() {
$var = db_quote($_GET['variable']);
$description = db_quote($_GET['description']);

$result = db_query("INSERT INTO `vars` (`var`,`description`) VALUES (" . $var . "," . $description . ") ON DUPLICATE KEY UPDATE var=".$var.", description=".$description."");
if($result === false) {
    $error = db_error();
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=variables.php\">";
}
}

function delVar() {
$var = db_quote($_GET['id']);

$result = db_query("DELETE FROM `vars` WHERE var=" . $var ." LIMIT 1");
if($result === false) {
    $error = db_error();
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=variables.php\">";
}
}

?>
<!-- Page Content end here -->
</body>
</html>

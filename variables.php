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
	$result = db_query("SELECT * FROM `vars`");
	while ($row = $result->fetch_assoc()) {
	echo "<tr>";
	echo "<td>" .$row['form-name']."</td>";
	echo "<td>" .$row[date]."</td>";
	echo "<td><form action='delete-form.php' method='POST'><input type='hidden' name='id' value='".$row["id"]."'/><input type='submit' onClick=\"return confirm('Are you sure?');\" name='submit-btn' class='btn btn-danger' value='Delete' /></form></td>";
	echo "<td><form action='editform.php' method='POST'><input type='hidden' name='id' value='".$row["id"]."'/><input type='submit' name='submit-btn' class='btn btn-info' value='Edit' /></form></td>";
	echo "</tr>";
	}
	?>
	</table>
      </div>
    </div>
  </div>
</div>



<!-- Page Content end here -->
</body>
</html>
